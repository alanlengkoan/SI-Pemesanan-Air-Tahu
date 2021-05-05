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
class __TwigTemplate_15625f0508dcf71efd472f4d20cb93fd9ddfc975bcad086a47d76540df8f6f01 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pemesanan/chat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pemesanan/chat.html.twig"));

        // line 1
        echo "<!--chat Row -->
<ul class=\"chat-list list-style-none px-3 pt-3\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 4
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "id_users", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "id_users", [], "any", false, false, false, 4)))) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  95 => 25,  89 => 24,  83 => 21,  78 => 19,  70 => 13,  64 => 10,  58 => 7,  54 => 5,  51 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--chat Row -->
<ul class=\"chat-list list-style-none px-3 pt-3\">
    {% for rows in chat %}
        {% if rows.id_users == app.user.id_users %}
            <li class=\"chat-item odd list-style-none mt-3\">
                <div class=\"chat-content text-right d-inline-block pl-3\">
                    <div class=\"box msg p-2 d-inline-block mb-1\">{{ rows.pesan }}</div>
                    <br>
                </div>
                <div class=\"chat-time text-right d-block font-10 mt-1 mr-0 mb-3\">{{ rows.date_send|date('H:i') }} | You</div>
            </li>
        {% else %}
            <li class=\"chat-item list-style-none mt-3\">
                <div class=\"chat-img d-inline-block\"><img
                        src=\"https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg\"
                        alt=\"user\" class=\"rounded-circle\" width=\"45\">
                </div>
                <div class=\"chat-content d-inline-block pl-3\">
                    <div class=\"msg p-2 d-inline-block mb-1\">{{ rows.pesan }}</div>
                </div>
                <div class=\"chat-time d-block font-10 mt-1 mr-0 mb-3\">{{ rows.date_send|date('H:i') }} | User</div>
            </li>
        {% endif %}
    {% endfor %}
</ul>", "admin/pemesanan/chat.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\pemesanan\\chat.html.twig");
    }
}
