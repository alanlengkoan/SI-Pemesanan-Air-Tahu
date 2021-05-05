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

/* admin/pemesanan/chat.html.twig */
class __TwigTemplate_adbc76da76a5da513f82dbc3016aeeaa68dd37eb3b2c308e689cc57758dff31e extends Template
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
        echo "<!--chat Row -->
<ul class=\"chat-list list-style-none px-3 pt-3\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 4
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "id_users", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "id_users", [], "any", false, false, false, 4)))) {
                // line 5
                echo "            <li class=\"chat-item odd list-style-none mt-3\">
                <div class=\"chat-content text-right d-inline-block pl-3\">
                    <div class=\"box msg p-2 d-inline-block mb-1\">";
                // line 7
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "pesan", [], "any", false, false, false, 7), "html", null, true);
                echo "</div>
                    <br>
                </div>
                <div class=\"chat-time text-right d-block font-10 mt-1 mr-0 mb-3\">";
                // line 10
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "date_send", [], "any", false, false, false, 10), "H:i"), "html", null, true);
                echo " | You</div>
            </li>
        ";
            } else {
                // line 13
                echo "            <li class=\"chat-item list-style-none mt-3\">
                <div class=\"chat-img d-inline-block\"><img
                        src=\"https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg\"
                        alt=\"user\" class=\"rounded-circle\" width=\"45\">
                </div>
                <div class=\"chat-content d-inline-block pl-3\">
                    <div class=\"msg p-2 d-inline-block mb-1\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "pesan", [], "any", false, false, false, 19), "html", null, true);
                echo "</div>
                </div>
                <div class=\"chat-time d-block font-10 mt-1 mr-0 mb-3\">";
                // line 21
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "date_send", [], "any", false, false, false, 21), "H:i"), "html", null, true);
                echo " | User</div>
            </li>
        ";
            }
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "admin/pemesanan/chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 25,  83 => 24,  77 => 21,  72 => 19,  64 => 13,  58 => 10,  52 => 7,  48 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/pemesanan/chat.html.twig", "/home/airtahu.online/templates/admin/pemesanan/chat.html.twig");
    }
}
