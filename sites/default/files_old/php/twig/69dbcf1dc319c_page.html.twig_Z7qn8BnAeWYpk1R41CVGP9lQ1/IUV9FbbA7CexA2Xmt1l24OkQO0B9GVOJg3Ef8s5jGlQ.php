<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/devsgroup/pages/page.html.twig */
class __TwigTemplate_7d9cdefb967361a76f53852af5cf3419 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 46
        $context["nav_classes"] = ((("navbar navbar-expand-lg" . (((        // line 47
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_schema"] ?? null), 47, $this->source))) : (" "))) . (((        // line 48
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 49
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_navbar_bg_schema"] ?? null), 49, $this->source))) : (" ")));
        // line 51
        yield "
";
        // line 53
        $context["footer_classes"] = (((" " . (((        // line 54
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_schema"] ?? null), 54, $this->source))) : (" "))) . (((        // line 55
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 56
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . $this->sandbox->ensureToStringAllowed(($context["b5_footer_bg_schema"] ?? null), 56, $this->source))) : (" ")));
        // line 58
        yield "
<header role=\"banner\">
  ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        yield "

  ";
        // line 62
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 62) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 62)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 62))) {
            // line 63
            yield "  <nav class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_classes"] ?? null), 63, $this->source), "html", null, true);
            yield "\">
    <div class=\"";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 64, $this->source), "html", null, true);
            yield " d-flex\">
      ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
            yield "

      ";
            // line 67
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 67) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 67))) {
                // line 68
                yield "        <button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\"
                data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
                aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"collapse navbar-collapse justify-content-md-end\" id=\"navbarSupportedContent\">
          ";
                // line 75
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 75), 75, $this->source), "html", null, true);
                yield "
          ";
                // line 76
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                yield "
         <div id=\"share_content\">
            <div class=\"dropdown\">
              <div class=\"dropdown-toggle fl-bigmug-line-share27\" data-bs-toggle=\"dropdown\">
              </div>
              <ul class=\"dropdown-menu dropdown-menu-share\" id=\"list_share\">
               
              </ul>
            </div>
          </div>
        </div>
      ";
            }
            // line 88
            yield "    </div>
  </nav>
  ";
        }
        // line 91
        yield "
</header>
<div class=\"row maxwidth\" style=\"margin-top: 10px !important;\">
";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "maxwidth", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
        yield "
</div>
<main role=\"main\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 98
        yield "
  ";
        // line 100
        $context["sidebar_first_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 100) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 100))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 102
        yield "
  ";
        // line 104
        $context["sidebar_second_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 104) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 104))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 106
        yield "
  ";
        // line 108
        $context["content_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 108) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 108))) ? ("col-12 col-lg-6") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 108) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 108))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 110
        yield "

  <div class=\"";
        // line 112
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 112, $this->source), "html", null, true);
        yield "\">
    ";
        // line 113
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 113)) {
            // line 114
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 114), 114, $this->source), "html", null, true);
            yield "
    ";
        }
        // line 116
        yield "    <div class=\"row g-0\">
      ";
        // line 117
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 117)) {
            // line 118
            yield "        <div class=\"order-2 order-lg-1 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_classes"] ?? null), 118, $this->source), "html", null, true);
            yield "\">
          ";
            // line 119
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 122
        yield "      <div class=\"order-1 order-lg-2 ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null), 122, $this->source), "html", null, true);
        yield "\">
        ";
        // line 123
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 123), 123, $this->source), "html", null, true);
        yield "
      </div>
      ";
        // line 125
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 125)) {
            // line 126
            yield "        <div class=\"order-3 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_classes"] ?? null), 126, $this->source), "html", null, true);
            yield "\">
          ";
            // line 127
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 130
        yield "    </div>
  </div>

</main>

";
        // line 135
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 135)) {
            // line 136
            yield "<footer role=\"contentinfo\" class=\"mt-auto ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_classes"] ?? null), 136, $this->source), "html", null, true);
            yield "\">
  <div class=\"";
            // line 137
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["b5_top_container"] ?? null), 137, $this->source), "html", null, true);
            yield "\">
    ";
            // line 138
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 138), 138, $this->source), "html", null, true);
            yield "
  </div>
</footer>
";
        }
        // line 142
        yield "<style>
ul.dropdown-menu-share.show {
       min-width: 3rem;
    box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);
    border: 0px;
    border-radius: 0px;
    margin-top: 1.1em;
}
</style>
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script>
listar_social_networks();
function listar_social_networks() {
  let url2 = \"/api-share\";
  let socialNetworksAcum = \"\";
  fetch(url2).then(res => res.json()).then(dato => {
    let content = \"\";
    for (let index = 0; index < dato.length; index++) {
      const element = dato[index];
      socialNetworksAcum += element.items;
    }
    document.getElementById(\"list_share\").innerHTML += socialNetworksAcum;
  })
}
</script>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["b5_navbar_schema", "b5_navbar_bg_schema", "b5_footer_schema", "b5_footer_bg_schema", "page", "b5_top_container"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/devsgroup/pages/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  223 => 142,  216 => 138,  212 => 137,  207 => 136,  205 => 135,  198 => 130,  192 => 127,  187 => 126,  185 => 125,  180 => 123,  175 => 122,  169 => 119,  164 => 118,  162 => 117,  159 => 116,  153 => 114,  151 => 113,  147 => 112,  143 => 110,  141 => 108,  138 => 106,  136 => 104,  133 => 102,  131 => 100,  128 => 98,  122 => 94,  117 => 91,  112 => 88,  97 => 76,  93 => 75,  84 => 68,  82 => 67,  77 => 65,  73 => 64,  68 => 63,  66 => 62,  61 => 60,  57 => 58,  55 => 56,  54 => 55,  53 => 54,  52 => 53,  49 => 51,  47 => 49,  46 => 48,  45 => 47,  44 => 46,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/devsgroup/pages/page.html.twig", "/var/www/html/drupal/devsgroup/themes/custom/devsgroup/pages/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 46, "if" => 62);
        static $filters = array("escape" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
