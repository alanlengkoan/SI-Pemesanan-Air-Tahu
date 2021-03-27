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

/* home/tracking.html.twig */
class __TwigTemplate_68b6fbb22c8d243d7c6ee101abc221ceb4a69bb429c752ed7b9031ca5f1270f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/tracking.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/tracking.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/tracking.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Detail Nota";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<style>
    .tracking-detail {
        padding: 3rem 0
    }

    #tracking {
        margin-bottom: 1rem
    }

    [class*=tracking-status-] p {
        margin: 0;
        font-size: 1.1rem;
        color: #fff;
        text-transform: uppercase;
        text-align: center
    }

    [class*=tracking-status-] {
        padding: 1.6rem 0
    }

    .tracking-status-intransit {
        background-color: #65aee0
    }

    .tracking-status-outfordelivery {
        background-color: #f5a551
    }

    .tracking-status-deliveryoffice {
        background-color: #f7dc6f
    }

    .tracking-status-delivered {
        background-color: #4cbb87
    }

    .tracking-status-attemptfail {
        background-color: #b789c7
    }

    .tracking-status-error,
    .tracking-status-exception {
        background-color: #d26759
    }

    .tracking-status-expired {
        background-color: #616e7d
    }

    .tracking-status-pending {
        background-color: #ccc
    }

    .tracking-status-inforeceived {
        background-color: #214977
    }

    .tracking-list {
        border: 1px solid #e5e5e5
    }

    .tracking-item {
        border-left: 1px solid #e5e5e5;
        position: relative;
        padding: 2rem 1.5rem .5rem 2.5rem;
        font-size: .9rem;
        margin-left: 3rem;
        min-height: 5rem
    }

    .tracking-item:last-child {
        padding-bottom: 4rem
    }

    .tracking-item .tracking-date {
        margin-bottom: .5rem
    }

    .tracking-item .tracking-date span {
        color: #888;
        font-size: 85%;
        padding-left: .4rem
    }

    .tracking-item .tracking-content {
        padding: .5rem .8rem;
        background-color: #f4f4f4;
        border-radius: .5rem
    }

    .tracking-item .tracking-content span {
        display: block;
        color: #888;
        font-size: 85%
    }

    .tracking-item .tracking-icon {
        line-height: 2.6rem;
        position: absolute;
        left: -1.3rem;
        width: 2.6rem;
        height: 2.6rem;
        text-align: center;
        border-radius: 50%;
        font-size: 1.1rem;
        background-color: #fff;
        color: #fff
    }

    .tracking-item .tracking-icon.status-sponsored {
        background-color: #f68
    }

    .tracking-item .tracking-icon.status-delivered {
        background-color: #4cbb87
    }

    .tracking-item .tracking-icon.status-outfordelivery {
        background-color: #f5a551
    }

    .tracking-item .tracking-icon.status-deliveryoffice {
        background-color: #f7dc6f
    }

    .tracking-item .tracking-icon.status-attemptfail {
        background-color: #b789c7
    }

    .tracking-item .tracking-icon.status-exception {
        background-color: #d26759
    }

    .tracking-item .tracking-icon.status-inforeceived {
        background-color: #214977
    }

    .tracking-item .tracking-icon.status-intransit {
        color: #e5e5e5;
        border: 1px solid #e5e5e5;
        font-size: .6rem
    }

    @media(min-width:992px) {
        .tracking-item {
            margin-left: 10rem
        }

        .tracking-item .tracking-date {
            position: absolute;
            left: -10rem;
            width: 7.5rem;
            text-align: right
        }

        .tracking-item .tracking-date span {
            display: block
        }

        .tracking-item .tracking-content {
            padding: 0;
            background-color: transparent
        }
    }

    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        width: 5px;
        background: #f5f5f5;
    }

    ::-webkit-scrollbar-thumb {
        width: 1em;
        background-color: #ddd;
        outline: 1px solid slategrey;
        border-radius: 1rem;
    }

    .text-small {
        font-size: 0.9rem;
    }

    .messages-box,
    .chat-box {
        height: 510px;
        overflow-y: scroll;
    }

    }

    .rounded-lg {
        border-radius: 0.5rem;
    }

    input::placeholder {
        font-size: 0.9rem;
        color: #999;
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 211
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 213
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/images/tahu.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">";
        // line 218
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 218, $this->source); })()), "html", null, true);
        echo "</h2>
            </div>
        </div>
    </div>
</section>
";
        // line 224
        echo "
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 229
        echo "            <div class=\"col-6\">
                <div id=\"tracking\">
                    <div class=\"tracking-list\">
                        ";
        // line 232
        $context["status_pengantaran"] = [0 => "Dikemas", 1 => "Dikirim", 2 => "Diterima"];
        // line 233
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tracking"]) || array_key_exists("tracking", $context) ? $context["tracking"] : (function () { throw new RuntimeError('Variable "tracking" does not exist.', 233, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 234
            echo "                        <div class=\"tracking-item\">
                            <div class=\"tracking-icon status-intransit\">
                                <svg class=\"svg-inline--fa fa-circle fa-w-16\" aria-hidden=\"true\" data-prefix=\"fas\"
                                    data-icon=\"circle\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                                    viewBox=\"0 12 512 512\">
                                    <path fill=\"currentColor\"
                                        d=\"M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z\">
                                    </path>
                                </svg>
                                <i class=\"fas fa-circle\"></i>
                            </div>
                            <div class=\"tracking-date\">
                                ";
            // line 246
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "ins", [], "any", false, false, false, 246), "d-m-Y"), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "ins", [], "any", false, false, false, 246), "H:i"), "html", null, true);
            echo "</span>
                            </div>
                            <div class=\"tracking-content\">
                                Pesanan Anda saat ini sedang :
                                <span>";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status_pengantaran"]) || array_key_exists("status_pengantaran", $context) ? $context["status_pengantaran"] : (function () { throw new RuntimeError('Variable "status_pengantaran" does not exist.', 250, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["rows"], "status", [], "any", false, false, false, 250), [], "array", false, false, false, 250), "html", null, true);
            echo "</span>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        echo "                    </div>
                </div>
            </div>
            ";
        // line 258
        echo "            ";
        // line 259
        echo "            <div class=\"col-6\" style=\"border: 1px solid #e5e5e5; padding-right: 0px; padding-left: 0px;\">
                <div class=\"chat-box bg-white\">
                    <!-- Sender Message-->
                    <div class=\"media w-50 mb-3 m-2\"><img
                            src=\"https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg\" alt=\"user\"
                            width=\"50\" class=\"rounded-circle\">
                        <div class=\"media-body ml-3\">
                            <div class=\"bg-light rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-muted\">Test which is a new approach all
                                    solutions</p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Reciever Message-->
                    <div class=\"media w-50 ml-auto mb-3 m-2\">
                        <div class=\"media-body\">
                            <div class=\"bg-primary rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-white\">Test which is a new approach to have
                                    all solutions</p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Sender Message-->
                    <div class=\"media w-50 mb-3 m-2\"><img
                            src=\"https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg\" alt=\"user\"
                            width=\"50\" class=\"rounded-circle\">
                        <div class=\"media-body ml-3\">
                            <div class=\"bg-light rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-muted\">Test, which is a new approach to have
                                </p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Reciever Message-->
                    <div class=\"media w-50 ml-auto mb-3 m-2\">
                        <div class=\"media-body\">
                            <div class=\"bg-primary rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-white\">Apollo University, Delhi, India Test
                                </p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Sender Message-->
                    <div class=\"media w-50 mb-3 m-2\"><img
                            src=\"https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg\" alt=\"user\"
                            width=\"50\" class=\"rounded-circle\">
                        <div class=\"media-body ml-3\">
                            <div class=\"bg-light rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-muted\">Test, which is a new approach</p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Reciever Message-->
                    <div class=\"media w-50 ml-auto mb-3\">
                        <div class=\"media-body\">
                            <div class=\"bg-primary rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-white\">Apollo University, Delhi, India Test
                                </p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>
                </div>

                <!-- Typing area -->
                <form action=\"#\" class=\"bg-light\">
                    <div class=\"input-group\">
                        <input type=\"text\" placeholder=\"Type a message\" aria-describedby=\"button-addon2\"
                            class=\"form-control rounded-0 border-0 py-4 bg-light\">
                        <div class=\"input-group-append\">
                            <button id=\"button-addon2\" type=\"submit\" class=\"btn btn-default\">
                                <i class=\"fa fa-paper-plane\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            ";
        // line 347
        echo "        </div>
    </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 353
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 354
        echo "<script>
    // untuk cetak
    var untukGetIdData = function() {
        \$(document).on('click', '#cetak', function () {
            var ini = \$(this);
            var id = ini.data('id');

            window.location = '/user/cetak/' + id;
        });
    }();
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/tracking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  501 => 354,  491 => 353,  477 => 347,  388 => 259,  386 => 258,  381 => 254,  371 => 250,  362 => 246,  348 => 234,  343 => 233,  341 => 232,  336 => 229,  330 => 224,  322 => 218,  313 => 213,  303 => 211,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Detail Nota{% endblock %}

{% block stylesheets %}
<style>
    .tracking-detail {
        padding: 3rem 0
    }

    #tracking {
        margin-bottom: 1rem
    }

    [class*=tracking-status-] p {
        margin: 0;
        font-size: 1.1rem;
        color: #fff;
        text-transform: uppercase;
        text-align: center
    }

    [class*=tracking-status-] {
        padding: 1.6rem 0
    }

    .tracking-status-intransit {
        background-color: #65aee0
    }

    .tracking-status-outfordelivery {
        background-color: #f5a551
    }

    .tracking-status-deliveryoffice {
        background-color: #f7dc6f
    }

    .tracking-status-delivered {
        background-color: #4cbb87
    }

    .tracking-status-attemptfail {
        background-color: #b789c7
    }

    .tracking-status-error,
    .tracking-status-exception {
        background-color: #d26759
    }

    .tracking-status-expired {
        background-color: #616e7d
    }

    .tracking-status-pending {
        background-color: #ccc
    }

    .tracking-status-inforeceived {
        background-color: #214977
    }

    .tracking-list {
        border: 1px solid #e5e5e5
    }

    .tracking-item {
        border-left: 1px solid #e5e5e5;
        position: relative;
        padding: 2rem 1.5rem .5rem 2.5rem;
        font-size: .9rem;
        margin-left: 3rem;
        min-height: 5rem
    }

    .tracking-item:last-child {
        padding-bottom: 4rem
    }

    .tracking-item .tracking-date {
        margin-bottom: .5rem
    }

    .tracking-item .tracking-date span {
        color: #888;
        font-size: 85%;
        padding-left: .4rem
    }

    .tracking-item .tracking-content {
        padding: .5rem .8rem;
        background-color: #f4f4f4;
        border-radius: .5rem
    }

    .tracking-item .tracking-content span {
        display: block;
        color: #888;
        font-size: 85%
    }

    .tracking-item .tracking-icon {
        line-height: 2.6rem;
        position: absolute;
        left: -1.3rem;
        width: 2.6rem;
        height: 2.6rem;
        text-align: center;
        border-radius: 50%;
        font-size: 1.1rem;
        background-color: #fff;
        color: #fff
    }

    .tracking-item .tracking-icon.status-sponsored {
        background-color: #f68
    }

    .tracking-item .tracking-icon.status-delivered {
        background-color: #4cbb87
    }

    .tracking-item .tracking-icon.status-outfordelivery {
        background-color: #f5a551
    }

    .tracking-item .tracking-icon.status-deliveryoffice {
        background-color: #f7dc6f
    }

    .tracking-item .tracking-icon.status-attemptfail {
        background-color: #b789c7
    }

    .tracking-item .tracking-icon.status-exception {
        background-color: #d26759
    }

    .tracking-item .tracking-icon.status-inforeceived {
        background-color: #214977
    }

    .tracking-item .tracking-icon.status-intransit {
        color: #e5e5e5;
        border: 1px solid #e5e5e5;
        font-size: .6rem
    }

    @media(min-width:992px) {
        .tracking-item {
            margin-left: 10rem
        }

        .tracking-item .tracking-date {
            position: absolute;
            left: -10rem;
            width: 7.5rem;
            text-align: right
        }

        .tracking-item .tracking-date span {
            display: block
        }

        .tracking-item .tracking-content {
            padding: 0;
            background-color: transparent
        }
    }

    ::-webkit-scrollbar {
        width: 5px;
    }

    ::-webkit-scrollbar-track {
        width: 5px;
        background: #f5f5f5;
    }

    ::-webkit-scrollbar-thumb {
        width: 1em;
        background-color: #ddd;
        outline: 1px solid slategrey;
        border-radius: 1rem;
    }

    .text-small {
        font-size: 0.9rem;
    }

    .messages-box,
    .chat-box {
        height: 510px;
        overflow-y: scroll;
    }

    }

    .rounded-lg {
        border-radius: 0.5rem;
    }

    input::placeholder {
        font-size: 0.9rem;
        color: #999;
    }
</style>
{% endblock %}

{% block body %}
{# begin:: background #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/user/images/tahu.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">{{ halaman }}</h2>
            </div>
        </div>
    </div>
</section>
{# end:: background #}

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            {# begin:: tracking #}
            <div class=\"col-6\">
                <div id=\"tracking\">
                    <div class=\"tracking-list\">
                        {% set status_pengantaran = ['Dikemas', 'Dikirim', 'Diterima'] %}
                        {% for rows in tracking %}
                        <div class=\"tracking-item\">
                            <div class=\"tracking-icon status-intransit\">
                                <svg class=\"svg-inline--fa fa-circle fa-w-16\" aria-hidden=\"true\" data-prefix=\"fas\"
                                    data-icon=\"circle\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                                    viewBox=\"0 12 512 512\">
                                    <path fill=\"currentColor\"
                                        d=\"M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z\">
                                    </path>
                                </svg>
                                <i class=\"fas fa-circle\"></i>
                            </div>
                            <div class=\"tracking-date\">
                                {{ rows.ins|date('d-m-Y') }}<span>{{ rows.ins|date('H:i') }}</span>
                            </div>
                            <div class=\"tracking-content\">
                                Pesanan Anda saat ini sedang :
                                <span>{{ status_pengantaran[rows.status] }}</span>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
            {# end:: tracking #}
            {# begin:: chat #}
            <div class=\"col-6\" style=\"border: 1px solid #e5e5e5; padding-right: 0px; padding-left: 0px;\">
                <div class=\"chat-box bg-white\">
                    <!-- Sender Message-->
                    <div class=\"media w-50 mb-3 m-2\"><img
                            src=\"https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg\" alt=\"user\"
                            width=\"50\" class=\"rounded-circle\">
                        <div class=\"media-body ml-3\">
                            <div class=\"bg-light rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-muted\">Test which is a new approach all
                                    solutions</p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Reciever Message-->
                    <div class=\"media w-50 ml-auto mb-3 m-2\">
                        <div class=\"media-body\">
                            <div class=\"bg-primary rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-white\">Test which is a new approach to have
                                    all solutions</p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Sender Message-->
                    <div class=\"media w-50 mb-3 m-2\"><img
                            src=\"https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg\" alt=\"user\"
                            width=\"50\" class=\"rounded-circle\">
                        <div class=\"media-body ml-3\">
                            <div class=\"bg-light rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-muted\">Test, which is a new approach to have
                                </p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Reciever Message-->
                    <div class=\"media w-50 ml-auto mb-3 m-2\">
                        <div class=\"media-body\">
                            <div class=\"bg-primary rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-white\">Apollo University, Delhi, India Test
                                </p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Sender Message-->
                    <div class=\"media w-50 mb-3 m-2\"><img
                            src=\"https://res.cloudinary.com/mhmd/image/upload/v1564960395/avatar_usae7z.svg\" alt=\"user\"
                            width=\"50\" class=\"rounded-circle\">
                        <div class=\"media-body ml-3\">
                            <div class=\"bg-light rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-muted\">Test, which is a new approach</p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>

                    <!-- Reciever Message-->
                    <div class=\"media w-50 ml-auto mb-3\">
                        <div class=\"media-body\">
                            <div class=\"bg-primary rounded py-2 px-3 mb-2\">
                                <p class=\"text-small mb-0 text-white\">Apollo University, Delhi, India Test
                                </p>
                            </div>
                            <p class=\"small text-muted\">12:00 PM | Aug 13</p>
                        </div>
                    </div>
                </div>

                <!-- Typing area -->
                <form action=\"#\" class=\"bg-light\">
                    <div class=\"input-group\">
                        <input type=\"text\" placeholder=\"Type a message\" aria-describedby=\"button-addon2\"
                            class=\"form-control rounded-0 border-0 py-4 bg-light\">
                        <div class=\"input-group-append\">
                            <button id=\"button-addon2\" type=\"submit\" class=\"btn btn-default\">
                                <i class=\"fa fa-paper-plane\"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            {# end:: chat #}
        </div>
    </div>
    </div>
</section>
{% endblock %}

{% block javascripts %}
<script>
    // untuk cetak
    var untukGetIdData = function() {
        \$(document).on('click', '#cetak', function () {
            var ini = \$(this);
            var id = ini.data('id');

            window.location = '/user/cetak/' + id;
        });
    }();
</script>
{% endblock %}", "home/tracking.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\tracking.html.twig");
    }
}
