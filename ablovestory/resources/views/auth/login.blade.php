<x-guest-layout>
    <section class="contact-section section-padding" id="rsvp">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="section-title">
                        <h2>Are you attending?</h2>
                        <p>Recently cut out of an illustrated magazine and housed in a nice, gilded frame. It showed a lady fitted out with a fur hat</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1">
                    <div class="contact-form">
                        <form id="rsvp-form" class="form validate-rsvp-form row" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="col col-sm-12">
                                <input id="email" class="form-control" placeholder="Your Email*" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                            </div>
                            <div class="col col-sm-12">
                                <input id="password" class="form-control" placeholder="Your Password*" type="password" name="password"   :value="old('password')" required>
                            </div>

                            <div class="col col-sm-12 submit-btn">
                                <button type="submit" class="theme-btn">{{ __('Log in') }}</button>
                                <div id="loader">
                                    <i class="ti-reload"></i>
                                </div>
                            </div>
                            <div class="col col-sm-12 form-check">
                                <input style="height: 10%;" class="form-check-input" type="checkbox" id="remember_me" name="remember" value="something" checked>
                                <label class="form-check-label">{{ __('Remember me') }}</label>
                                @if (Route::has('password.request'))
                               <a href="/forgot-password" style="color: #925b48;"> {{ __('Forgot your password?') }}</a>
                                @endif
                            </div>

                            @session('status')
                            <div class="col col-md-12 success-error-message">
                                <div id="error">{{$value}}/div>
                                </div>
                                @endsession
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>

<style>
    .form-check-input {
    accent-color: #925b48; /* color del check y del borde */
}

/* Si quieres más control (por compatibilidad o para Safari) */
.form-check-input:checked {
    background-color: #925b48 !important;
    border-color: #925b48 !important;
}
</style>
</x-guest-layout>