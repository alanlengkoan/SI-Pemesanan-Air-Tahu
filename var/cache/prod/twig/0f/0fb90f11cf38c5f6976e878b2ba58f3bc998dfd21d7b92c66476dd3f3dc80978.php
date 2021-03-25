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

/* home/kontak.html.twig */
class __TwigTemplate_c02df3d85d4aec85cce46d974022d751350f84277e249e32ba0cc9679c74d63b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/kontak.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/kontak.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Kontak";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/images/tahu.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">Kontak</h2>
            </div>
        </div>
    </div>
</section>
";
        // line 18
        echo "
<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-12\">
                <div class=\"wrapper px-md-4\">
                    <div class=\"row mb-5\">
                        <div class=\"col-md-3\">
                            <div class=\"dbox w-100 text-center\">
                                <div class=\"icon d-flex align-items-center justify-content-center\">
                                    <span class=\"fa fa-map-marker\"></span>
                                </div>
                                <div class=\"text\">
                                    <p><span>Alamat:</span> Jl. Ade Irma Nasution No. 14B, Ujung Pandang Baru, Kec. Tallo, Kota Makassar, Sulawesi Selatan 90215.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"dbox w-100 text-center\">
                                <div class=\"icon d-flex align-items-center justify-content-center\">
                                    <span class=\"fa fa-phone\"></span>
                                </div>
                                <div class=\"text\">
                                    <p><span>Telepon:</span> <a href=\"tel://82385772148\">+62 823-8577-2148</a></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"dbox w-100 text-center\">
                                <div class=\"icon d-flex align-items-center justify-content-center\">
                                    <span class=\"fa fa-paper-plane\"></span>
                                </div>
                                <div class=\"text\">
                                    <p><span>Email:</span> <a href=\"mailto:an.three20@gmail.com\">an.three20@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"dbox w-100 text-center\">
                                <div class=\"icon d-flex align-items-center justify-content-center\">
                                    <span class=\"fa fa-globe\"></span>
                                </div>
                                <div class=\"text\">
                                    <p><span>Website</span> <a href=\"#\">airtahusuper.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/kontak.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  73 => 7,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Kontak{% endblock %}

{% block body %}
{# begin:: background #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/user/images/tahu.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">Kontak</h2>
            </div>
        </div>
    </div>
</section>
{# end:: background #}

<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-12\">
                <div class=\"wrapper px-md-4\">
                    <div class=\"row mb-5\">
                        <div class=\"col-md-3\">
                            <div class=\"dbox w-100 text-center\">
                                <div class=\"icon d-flex align-items-center justify-content-center\">
                                    <span class=\"fa fa-map-marker\"></span>
                                </div>
                                <div class=\"text\">
                                    <p><span>Alamat:</span> Jl. Ade Irma Nasution No. 14B, Ujung Pandang Baru, Kec. Tallo, Kota Makassar, Sulawesi Selatan 90215.</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"dbox w-100 text-center\">
                                <div class=\"icon d-flex align-items-center justify-content-center\">
                                    <span class=\"fa fa-phone\"></span>
                                </div>
                                <div class=\"text\">
                                    <p><span>Telepon:</span> <a href=\"tel://82385772148\">+62 823-8577-2148</a></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"dbox w-100 text-center\">
                                <div class=\"icon d-flex align-items-center justify-content-center\">
                                    <span class=\"fa fa-paper-plane\"></span>
                                </div>
                                <div class=\"text\">
                                    <p><span>Email:</span> <a href=\"mailto:an.three20@gmail.com\">an.three20@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"dbox w-100 text-center\">
                                <div class=\"icon d-flex align-items-center justify-content-center\">
                                    <span class=\"fa fa-globe\"></span>
                                </div>
                                <div class=\"text\">
                                    <p><span>Website</span> <a href=\"#\">airtahusuper.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "home/kontak.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\kontak.html.twig");
    }
}
