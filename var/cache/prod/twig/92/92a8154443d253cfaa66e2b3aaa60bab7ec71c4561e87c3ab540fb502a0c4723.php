<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/chat.html.twig */
class __TwigTemplate_f5f941096b2a979131356e78c65a46edf49a53c11e6b491523c12e1fb92f0f88 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 2
            echo "    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "id_users", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 2), "id_users", [], "any", false, false, false, 2)))) {
                // line 3
                echo "        <div class=\"media w-50 ml-auto mb-3 m-2\">
            <div class=\"media-body\">
                <div class=\"bg-primary rounded py-2 px-3 mb-2\">
                    <p class=\"text-small mb-0 text-white\">";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "pesan", [], "any", false, false, false, 6), "html", null, true);
                echo "</p>
                </div>
                <p class=\"small text-muted\">";
                // line 8
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "date_send", [], "any", false, false, false, 8), "H:i"), "html", null, true);
                echo " | You</p>
            </div>
        </div>
    ";
            } else {
                // line 12
                echo "        <div class=\"media w-50 mb-3 m-2\"><img src=\"https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg\" alt=\"user\" width=\"50\"
                class=\"rounded-circle\">
            <div class=\"media-body ml-3\">
                <div class=\"bg-light rounded py-2 px-3 mb-2\">
                    <p class=\"text-small mb-0 text-muted\">";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "pesan", [], "any", false, false, false, 16), "html", null, true);
                echo "</p>
                </div>
                <p class=\"small text-muted\">";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "date_send", [], "any", false, false, false, 18), "H:i"), "html", null, true);
                echo " | Admin</p>
            </div>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "home/chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  67 => 16,  61 => 12,  54 => 8,  49 => 6,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/chat.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\chat.html.twig");
    }
}
