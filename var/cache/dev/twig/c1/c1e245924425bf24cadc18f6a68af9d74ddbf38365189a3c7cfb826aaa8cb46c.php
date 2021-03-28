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
class __TwigTemplate_c8357b649daf623724125d0c8c9891b1e5146d29d52b410d8f55a71fd6b896b0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/chat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/chat.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chat"]) || array_key_exists("chat", $context) ? $context["chat"] : (function () { throw new RuntimeError('Variable "chat" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 2
            echo "    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "id_users", [], "any", false, false, false, 2), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "user", [], "any", false, false, false, 2), "id_users", [], "any", false, false, false, 2)))) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  78 => 18,  73 => 16,  67 => 12,  60 => 8,  55 => 6,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for rows in chat %}
    {% if rows.id_users == app.user.id_users %}
        <div class=\"media w-50 ml-auto mb-3 m-2\">
            <div class=\"media-body\">
                <div class=\"bg-primary rounded py-2 px-3 mb-2\">
                    <p class=\"text-small mb-0 text-white\">{{ rows.pesan }}</p>
                </div>
                <p class=\"small text-muted\">{{ rows.date_send|date('H:i') }} | You</p>
            </div>
        </div>
    {% else %}
        <div class=\"media w-50 mb-3 m-2\"><img src=\"https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg\" alt=\"user\" width=\"50\"
                class=\"rounded-circle\">
            <div class=\"media-body ml-3\">
                <div class=\"bg-light rounded py-2 px-3 mb-2\">
                    <p class=\"text-small mb-0 text-muted\">{{ rows.pesan }}</p>
                </div>
                <p class=\"small text-muted\">{{ rows.date_send|date('H:i') }} | Admin</p>
            </div>
        </div>
    {% endif %}
{% endfor %}", "home/chat.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\chat.html.twig");
    }
}
