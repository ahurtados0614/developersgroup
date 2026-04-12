<?php

namespace App\Http\Controllers;

use App\Models\Galleries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use getID3;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class GalleryController extends Controller
{
    //galleryuploads.blade 
    public function ShowGallery()
    {

        $videos = $this->getFiles('video');
        $fotos = $this->getFiles('foto'); //dd($fotos);
        $audios = $this->getFiles('audio');
        return view('galleryuploads', ['audios' => $audios, 'videos' => $videos, 'fotos' => $fotos]);
    }
    public function getFiles($type = null)
    {
        $files = DB::table('galleries')
            ->where('type_media', $type)
            ->get();

        if ($type === 'foto') {

            $files = $files->map(function ($file) {

                $path = public_path($file->file_path);

                if (!file_exists($path)) {
                    $file->orientation = 2;
                    return $file;
                }

                $orientation = 1;

                if (function_exists('exif_read_data')) {
                    $exif = @exif_read_data($path);
                    $orientation = $exif['Orientation'] ?? 1;
                }

                // EXIF manda primero
                if (in_array($orientation, [6, 8])) {
                    $file->orientation = 0; // portrait
                } else {
                    [$width, $height] = getimagesize($path);
                    $file->orientation = $height > $width ? 0 : 1;
                }

                return $file;
            })
                ->sortBy('orientation')
                ->values();
        }

        return $files;
    }

    //uploading.blade
    public function ShowUploading()
    {
        //validar si la fecha ya paso redirigir a otra vista
        return view('uploading');
    }
    //store
    public function store(Request $request)
    {

        switch ($request->type) {
            case 'foto':
                return $this->storeFotos($request);
                break;

            case 'video':
                return $this->storeVideos($request);
                break;

            case 'audio':
                return $this->storeAudios($request);
                break;

            default:
                # code...
                break;
        }
    }
    public function storeFotos($request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'imagenes.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
                'type' => 'required|in:foto',
            ],
            [
                'required' => 'El campo :attribute es requerido.',
                'string' => 'El campo :attribute debe ser una cadena de texto.',
                'max' => 'El campo :attribute no puede tener más de :max caracteres.',
                'image' => 'El campo :attribute debe ser una imagen válida.',
                'mimes' => 'Los formatos aceptados para :attribute son: :values.',
                'in' => 'El tipo de formulario debe ser válido.',
            ]
        );

        $validator->setAttributeNames([
            'name' => 'Nombre',
            'imagenes.*' => 'Fotos seleccionadas',
            'type' => 'Tipo de formulario',
        ]);

        if ($validator->fails()) {
            return back()
                ->withInput()
                ->withErrors($validator);
        }

        $paths = [];

        $paths = [];

        if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
                $destinationPath = public_path('storage/loads/photos');

                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0755, true);
                }

                $fileName = time() . '_' . $imagen->getClientOriginalName();
                $imagen->move($destinationPath, $fileName);

                $publicPath = 'storage/loads/photos/' . $fileName;
                $paths[] = $publicPath;

                // ✅ Guardar una fila por cada imagen
                Galleries::create([
                    'gest' => ucwords(strtolower($request->name)),
                    'type_media' => $request->type,
                    'file_path' => $publicPath, // cadena, no array
                ]);
            }
        }

        return $this->redirecSuccess();
    }

    public function storeVideos(Request $request)
    {
        // Validación inicial (nombre, tipo y tipo MIME)
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'video' => 'required|mimetypes:video/mp4,video/avi,video/mpeg,video/quicktime|max:51200',
                'type' => 'required|in:video',
            ],
            [
                'required' => 'El campo :attribute es requerido.',
                'string' => 'El campo :attribute debe ser una cadena de texto.',
                'mimetypes' => 'Solo se permiten videos MP4, AVI, MPEG o MOV.',
                'max' => 'El tamaño máximo permitido es de 50 MB.',
            ]
        );

        $validator->setAttributeNames([
            'name' => 'Nombre',
            'video' => 'Video seleccionado',
            'type' => 'Tipo de formulario',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        // Validar duración del video (por ejemplo, máx. 5 minutos)
        $video = $request->file('video');
        $analyzer = new getID3;
        $fileInfo = $analyzer->analyze($video->getRealPath());

        $duration = $fileInfo['playtime_seconds'] ?? 0; // duración en segundos
        $maxDuration = 180; // 3 minutos

        if ($duration > $maxDuration) {
            return back()
                ->withInput()
                ->withErrors(['video' => 'El video no debe durar más de 3 minutos.']);
        }

        // Guardar el archivo
        $destinationPath = public_path('storage/loads/videos');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $fileName = time() . '_' . $video->getClientOriginalName();
        $video->move($destinationPath, $fileName);
        $publicPath = 'storage/loads/videos/' . $fileName;

        // Guardar en base de datos
        Galleries::create([
            'gest' => ucwords(strtolower($request->name)),
            'type_media' => $request->type,
            'file_path' => $publicPath,
        ]);

        return $this->redirecSuccess();
    }
    public function storeAudios(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|max:255',
                'audio' => 'required|mimetypes:audio/mpeg,audio/mp3,audio/wav,audio/ogg|max:10240', // max 10MB
                'type' => 'required|in:audio',
            ],
            [
                'required' => 'El campo :attribute es obligatorio.',
                'mimetypes' => 'El archivo debe ser un audio válido (mp3, wav, ogg).',
                'max' => 'El archivo no puede superar los 10 MB.',
            ]
        );

        $validator->setAttributeNames([
            'name' => 'Nombre',
            'audio' => 'Nota de audio',
            'type' => 'Tipo de formulario',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $file = $request->file('audio');
        $destinationPath = public_path('storage/loads/audios');

        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move($destinationPath, $fileName);

        $publicPath = 'storage/loads/audios/' . $fileName;

        Galleries::create([
            'gest' => ucwords(strtolower($request->name)),
            'type_media' => $request->type,
            'file_path' => $publicPath,
        ]);

        return $this->redirecSuccess();
    }
    public function redirecSuccess()
    {
        $videos = $this->getFiles('video');
        $fotos = $this->getFiles('foto');
        $audios = $this->getFiles('audio');
        return view('galleryuploads', ['audios' => $audios, 'videos' => $videos, 'fotos' => $fotos, 'success' => "Muchas Gracias. Recuerdos guardados correctamente!"]);
    }

    //gallery fotos estudio
    public function gallery()
    {
        $path = public_path('assets/images/gallery_studio');
        
        $images = [];

        foreach (File::files($path) as $file) {
            $imagePath = $file->getPathname();

            [$width, $height] = getimagesize($imagePath);

            $orientation = $width > $height ? 'landscape' : 'portrait';

            $images[] = [
                'name'        => $file->getFilename(),
                'url'         => asset('/assets/images/gallery_studio/' . $file->getFilename()),
                'width'       => $width,
                'height'      => $height,
                'orientation' => $orientation,
            ];
        }

        return view('gallery_studio', compact('images'));
    }
}
