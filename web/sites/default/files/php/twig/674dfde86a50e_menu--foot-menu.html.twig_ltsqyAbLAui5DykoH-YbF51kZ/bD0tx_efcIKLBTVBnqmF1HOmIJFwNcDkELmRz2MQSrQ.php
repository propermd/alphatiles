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

/* themes/custom/alphatiles/templates/menu--foot-menu.html.twig */
class __TwigTemplate_c47d521e434e535346ce0bbb048cb54c extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 15
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 16
        yield "
";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["menus"], "macro_build_menu", [($context["items"] ?? null), ($context["attributes"] ?? null)], 17, $context, $this->getSourceContext()));
        yield "

";
        // line 28
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes"]);        yield from [];
    }

    // line 19
    public function macro_build_menu($__items__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "items" => $__items__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 20
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 21
                yield "    <ul";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["navbar-nav justify-content-end flex-nowrap"], "method", false, false, true, 21), "html", null, true);
                yield ">
      ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 23
                    yield "        ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::callMacro($macros["_self"], "macro_add_link", [$context["item"]], 23, $context, $this->getSourceContext()));
                    yield "
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                yield "    </ul>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function macro_add_link($__item__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = [
            "item" => $__item__,
            "varargs" => $__varargs__,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "  ";
            // line 31
            $context["link_classes"] = ["nav-link", ((CoreExtension::getAttribute($this->env, $this->source,             // line 33
($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 33)) ? ("active") : (""))];
            // line 36
            yield "  <li class=\"nav-item\">
    ";
            // line 37
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 37), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 37), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
            yield "
  </li>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/alphatiles/templates/menu--foot-menu.html.twig";
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
        return array (  124 => 37,  121 => 36,  119 => 33,  118 => 31,  116 => 30,  104 => 29,  96 => 25,  87 => 23,  83 => 22,  78 => 21,  75 => 20,  62 => 19,  55 => 28,  50 => 17,  47 => 16,  45 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/alphatiles/templates/menu--foot-menu.html.twig", "/Users/naxic/Sites/localhost/alphatiles/web/themes/custom/alphatiles/templates/menu--foot-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 15, "macro" => 19, "if" => 20, "for" => 22, "set" => 31);
        static $filters = array("escape" => 21);
        static $functions = array("link" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape'],
                ['link'],
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
