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

/* home/produk_det.html.twig */
class __TwigTemplate_b40489de97b607835f32e9e23019b472d8fe28abbbe5e9c8845b20357097a7b4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/produk_det.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/produk_det.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Detail Produk";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<style>
    .product-details button,
    .product-details .form-control {
        height: 70px !important;
        text-align: center;
        border-radius: 5px;
        font-size: 14px;
    }

  .product-details button:hover,
  .product-details button:focus,
  .product-details .form-control:hover,
  .product-details .form-control:focus {
      text-decoration: none;
      outline: none;
  }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/images/tahu.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">Detail Produk</h2>
            </div>
        </div>
    </div>
</section>
";
        // line 38
        echo "
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 mb-5 ftco-animate\">
                <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 43, $this->source); })()), "gambar", [], "any", false, false, false, 43))), "html", null, true);
        echo "\" class=\"image-popup prod-img-bg\">
                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 44, $this->source); })()), "gambar", [], "any", false, false, false, 44))), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Colorlib Template\">
                </a>
            </div>
            <div class=\"col-lg-6 product-details pl-md-5 ftco-animate\">
                <h3>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 48, $this->source); })()), "nama", [], "any", false, false, false, 48), "html", null, true);
        echo "</h3>
                <p class=\"price\"><span>Rp. ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 49, $this->source); })()), "harga", [], "any", false, false, false, 49)), "html", null, true);
        echo "</span></p>
                ";
        // line 50
        echo twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 50, $this->source); })()), "tentang", [], "any", false, false, false, 50);
        echo "
                ";
        // line 51
        $context["stock_terjual"] = (twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 51, $this->source); })()), "stock", [], "any", false, false, false, 51) - twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 51, $this->source); })()), "jumlah", [], "any", false, false, false, 51));
        // line 52
        echo "                ";
        $context["stock"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 52, $this->source); })()), "jumlah_keranjang", [], "any", false, false, false, 52), null))) ? ((twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 52, $this->source); })()), "stock", [], "any", false, false, false, 52) - twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 52, $this->source); })()), "jumlah", [], "any", false, false, false, 52))) : (((isset($context["stock_terjual"]) || array_key_exists("stock_terjual", $context) ? $context["stock_terjual"] : (function () { throw new RuntimeError('Variable "stock_terjual" does not exist.', 52, $this->source); })()) - twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 52, $this->source); })()), "jumlah_keranjang", [], "any", false, false, false, 52))));
        // line 53
        echo "                ";
        if ((1 === twig_compare((isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 53, $this->source); })()), 0))) {
            // line 54
            echo "                    <form action=\"/user/keranjang/add\" method=\"post\">
                        <input type=\"hidden\" name=\"inpidusers\" value=\"";
            // line 55
            ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "id_users", [], "any", false, false, false, 55), "html", null, true))) : (print (null)));
            echo "\" />
                        <input type=\"hidden\" name=\"inpkdproduk\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 56, $this->source); })()), "kd_produk", [], "any", false, false, false, 56), "html", null, true);
            echo "\" />
                        <button type=\"submit\" class=\"btn btn-primary btn-keranjang py-3 px-5 mr-2\">Pesan</button>
                    </form>
                ";
        }
        // line 60
        echo "            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/produk_det.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 60,  164 => 56,  160 => 55,  157 => 54,  154 => 53,  151 => 52,  149 => 51,  145 => 50,  141 => 49,  137 => 48,  130 => 44,  126 => 43,  119 => 38,  105 => 27,  98 => 25,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Detail Produk{% endblock %}

{% block stylesheets %}
<style>
    .product-details button,
    .product-details .form-control {
        height: 70px !important;
        text-align: center;
        border-radius: 5px;
        font-size: 14px;
    }

  .product-details button:hover,
  .product-details button:focus,
  .product-details .form-control:hover,
  .product-details .form-control:focus {
      text-decoration: none;
      outline: none;
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
                <h2 class=\"mb-0 bread\">Detail Produk</h2>
            </div>
        </div>
    </div>
</section>
{# end:: background #}

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 mb-5 ftco-animate\">
                <a href=\"{{ asset('uploads/produk/'~produk.gambar) }}\" class=\"image-popup prod-img-bg\">
                    <img src=\"{{ asset('uploads/produk/'~produk.gambar) }}\" class=\"img-fluid\" alt=\"Colorlib Template\">
                </a>
            </div>
            <div class=\"col-lg-6 product-details pl-md-5 ftco-animate\">
                <h3>{{ produk.nama }}</h3>
                <p class=\"price\"><span>Rp. {{ produk.harga|format_rp }}</span></p>
                {{ produk.tentang|raw }}
                {% set stock_terjual = (produk.stock - produk.jumlah) %}
                {% set stock = (produk.jumlah_keranjang == null) ? produk.stock - produk.jumlah : stock_terjual - produk.jumlah_keranjang %}
                {% if stock > 0 %}
                    <form action=\"/user/keranjang/add\" method=\"post\">
                        <input type=\"hidden\" name=\"inpidusers\" value=\"{{ (app.user) ? app.user.id_users : null }}\" />
                        <input type=\"hidden\" name=\"inpkdproduk\" value=\"{{ produk.kd_produk }}\" />
                        <button type=\"submit\" class=\"btn btn-primary btn-keranjang py-3 px-5 mr-2\">Pesan</button>
                    </form>
                {% endif %}
            </div>
        </div>
    </div>
</section>
{% endblock %}", "home/produk_det.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\produk_det.html.twig");
    }
}
