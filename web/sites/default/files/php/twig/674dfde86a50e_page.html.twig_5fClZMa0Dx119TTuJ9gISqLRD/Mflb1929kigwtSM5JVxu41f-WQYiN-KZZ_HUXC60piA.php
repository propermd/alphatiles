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

/* themes/custom/alphatiles/templates/page.html.twig */
class __TwigTemplate_67782711960b0e65bed6659c01df901c extends Template
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
($context["b5_navbar_schema"] ?? null) != "none")) ? ((" navbar-" . ($context["b5_navbar_schema"] ?? null))) : (" "))) . (((        // line 48
($context["b5_navbar_schema"] ?? null) != "none")) ? ((((($context["b5_navbar_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 49
($context["b5_navbar_bg_schema"] ?? null) != "none")) ? ((" bg-" . ($context["b5_navbar_bg_schema"] ?? null))) : (" ")));
        // line 51
        yield "
";
        // line 53
        $context["footer_classes"] = (((" " . (((        // line 54
($context["b5_footer_schema"] ?? null) != "none")) ? ((" footer-" . ($context["b5_footer_schema"] ?? null))) : (" "))) . (((        // line 55
($context["b5_footer_schema"] ?? null) != "none")) ? ((((($context["b5_footer_schema"] ?? null) == "dark")) ? (" text-light") : (" text-dark"))) : (" "))) . (((        // line 56
($context["b5_footer_bg_schema"] ?? null) != "none")) ? ((" bg-" . ($context["b5_footer_bg_schema"] ?? null))) : (" ")));
        // line 58
        yield "
<header role=\"banner\">
  ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 60), "html", null, true);
        yield "

  ";
        // line 62
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 62) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 62)) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 62))) {
            // line 63
            yield "  <nav class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["nav_classes"] ?? null), "html", null, true);
            yield "\">
    <div class=\"";
            // line 64
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
            yield " d-flex\">
      ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_branding", [], "any", false, false, true, 65), "html", null, true);
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
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 75), "html", null, true);
                yield "
          ";
                // line 76
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "nav_additional", [], "any", false, false, true, 76), "html", null, true);
                yield "
        </div>
      ";
            }
            // line 79
            yield "    </div>
  </nav>
  ";
        }
        // line 82
        yield "
</header>

<div id=\"topbar\">
<div class=\"container\"> 
  ";
        // line 87
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_bar", [], "any", false, false, true, 87), "html", null, true);
        yield "
</div>
 </div>

<main role=\"main\" class=\"corecontent\">
  <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 93
        yield "
  ";
        // line 95
        $context["sidebar_first_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 95) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 97
        yield "
  ";
        // line 99
        $context["sidebar_second_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 99) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 99))) ? ("col-12 col-sm-6 col-lg-3") : ("col-12 col-lg-3"));
        // line 101
        yield "
  ";
        // line 103
        $context["content_classes"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 103) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 103))) ? ("col-12 col-lg-6") : ((((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 103) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 103))) ? ("col-12 col-lg-9") : ("col-12"))));
        // line 105
        yield "

  <div class=\"";
        // line 107
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 108
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 108)) {
            // line 109
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 109), "html", null, true);
            yield "
    ";
        }
        // line 111
        yield "    <div class=\"row g-0\">
      ";
        // line 112
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 112)) {
            // line 113
            yield "        <div class=\"order-2 order-lg-1 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_classes"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 114
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 114), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 117
        yield "      <div class=\"order-1 order-lg-2 ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_classes"] ?? null), "html", null, true);
        yield "\">
        ";
        // line 118
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 118), "html", null, true);
        yield "
      </div>
      ";
        // line 120
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 120)) {
            // line 121
            yield "        <div class=\"order-3 ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_classes"] ?? null), "html", null, true);
            yield "\">
          ";
            // line 122
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 122), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 125
        yield "    </div>
  </div>

</main>

<div id=\"contentbtm\">
  <div class=\"container\"> ";
        // line 131
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "contentbtm", [], "any", false, false, true, 131), "html", null, true);
        yield "
  </div>

</div>


<div id=\"footercont\" class=\"mt-auto ";
        // line 137
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer_classes"] ?? null), "html", null, true);
        yield "\">
  <div class=\"";
        // line 138
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["b5_top_container"] ?? null), "html", null, true);
        yield "\">
  <div class=\"row\">
    <div class=\"col-md-4\"> ";
        // line 140
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerleft", [], "any", false, false, true, 140), "html", null, true);
        yield "</div>
    <div class=\"col-md-4 \"> ";
        // line 141
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 141), "html", null, true);
        yield "</div>
    <div class=\"col-md-3 offset-md-1\"> ";
        // line 142
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerright", [], "any", false, false, true, 142), "html", null, true);
        yield "</div>
   </div>
       
  </div>
</div>
<div class=\"footerbase\"> 
  <div class=\"container\"> 
      ";
        // line 149
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footerbase", [], "any", false, false, true, 149), "html", null, true);
        yield "
  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["b5_navbar_schema", "b5_navbar_bg_schema", "b5_footer_schema", "b5_footer_bg_schema", "page", "b5_top_container"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/alphatiles/templates/page.html.twig";
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
        return array (  237 => 149,  227 => 142,  223 => 141,  219 => 140,  214 => 138,  210 => 137,  201 => 131,  193 => 125,  187 => 122,  182 => 121,  180 => 120,  175 => 118,  170 => 117,  164 => 114,  159 => 113,  157 => 112,  154 => 111,  148 => 109,  146 => 108,  142 => 107,  138 => 105,  136 => 103,  133 => 101,  131 => 99,  128 => 97,  126 => 95,  123 => 93,  115 => 87,  108 => 82,  103 => 79,  97 => 76,  93 => 75,  84 => 68,  82 => 67,  77 => 65,  73 => 64,  68 => 63,  66 => 62,  61 => 60,  57 => 58,  55 => 56,  54 => 55,  53 => 54,  52 => 53,  49 => 51,  47 => 49,  46 => 48,  45 => 47,  44 => 46,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/alphatiles/templates/page.html.twig", "/Users/naxic/Sites/localhost/alphatiles/web/themes/custom/alphatiles/templates/page.html.twig");
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
