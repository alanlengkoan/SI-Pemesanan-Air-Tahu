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

/* home/index.html.twig */
class __TwigTemplate_8315a0f58c5fcedb820fa00e49fc7dfc5cdfbdd71b697633689330db6994e90a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Home";
        
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
.product .img .desc .meta-prod .btn-keranjang {
    margin: 0 2px;
    width: 60px;
    height: 60px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    background-color: transparent;
    color: white;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
        echo "<div class=\"hero-wrap\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/images/tahu.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-8 ftco-animate d-flex align-items-end\">
                <div class=\"text w-100 text-center\">
                    <h1 class=\"mb-4\"> <span>Air</span> Tahu <span>Super</span>.</h1>
                    <p><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produk_sel");
        echo "\" class=\"btn btn-primary py-2 px-4\">Shop Now</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 34
        echo "
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <h2>Produk</h2>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 44
            echo "            ";
            $context["stock_terjual"] = (twig_get_attribute($this->env, $this->source, $context["rows"], "stock", [], "any", false, false, false, 44) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 44));
            // line 45
            echo "            ";
            $context["stock"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah_keranjang", [], "any", false, false, false, 45), null))) ? ((twig_get_attribute($this->env, $this->source, $context["rows"], "stock", [], "any", false, false, false, 45) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 45))) : (((isset($context["stock_terjual"]) || array_key_exists("stock_terjual", $context) ? $context["stock_terjual"] : (function () { throw new RuntimeError('Variable "stock_terjual" does not exist.', 45, $this->source); })()) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah_keranjang", [], "any", false, false, false, 45))));
            echo "            
            <div class=\"col-md-3 d-flex\">
                <div class=\"product ftco-animate\">
                    <div class=\"img d-flex align-items-center justify-content-center\"
                        style=\"background-image: url('uploads/produk/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 49), "html", null, true);
            echo "');\">
                        <div class=\"desc\">
                            <div class=\"meta-prod d-flex\">
                                ";
            // line 52
            if ((1 === twig_compare((isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 52, $this->source); })()), 0))) {
                // line 53
                echo "                                <form action=\"/user/keranjang/add\" method=\"post\">
                                    <input type=\"hidden\" name=\"inpidusers\" value=\"";
                // line 54
                ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "id_users", [], "any", false, false, false, 54), "html", null, true))) : (print (null)));
                echo "\" />
                                    <input type=\"hidden\" name=\"inpkdproduk\" value=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_produk", [], "any", false, false, false, 55), "html", null, true);
                echo "\" />
                                    <button type=\"submit\" class=\"btn-keranjang\"><span class=\"flaticon-shopping-bag\"></span></button>
                                </form>
                                ";
            }
            // line 59
            echo "                                <a href=\"produk/detail/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_produk", [], "any", false, false, false, 59), "html", null, true);
            echo "\" class=\"d-flex align-items-center justify-content-center\"><span class=\"flaticon-visibility\"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"text text-center\">
                        <span class=\"category\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 64), "html", null, true);
            echo "</span>
                        <h2 style=\"margin: 0\">";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "</h2>
                        <p class=\"mb-0\"> <span class=\"price\">Rp. ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 66)), "html", null, true);
            echo "</span> </p>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-4\">
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produk_sel");
        echo "\" class=\"btn btn-primary d-block\">Selengkapnya <span class=\"fa fa-long-arrow-right\"></span></a>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 74,  194 => 71,  183 => 66,  179 => 65,  175 => 64,  166 => 59,  159 => 55,  155 => 54,  152 => 53,  150 => 52,  144 => 49,  136 => 45,  133 => 44,  129 => 43,  118 => 34,  109 => 27,  98 => 20,  91 => 18,  74 => 6,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Home{% endblock %}

{% block stylesheets %}
<style>
.product .img .desc .meta-prod .btn-keranjang {
    margin: 0 2px;
    width: 60px;
    height: 60px;
    border: 1px solid rgba(255, 255, 255, 0.5);
    background-color: transparent;
    color: white;
}
</style>
{% endblock %}

{% block body %}
{# begin:: background #}
<div class=\"hero-wrap\" style=\"background-image: url('{{ asset('assets/user/images/tahu.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-center justify-content-center\">
            <div class=\"col-md-8 ftco-animate d-flex align-items-end\">
                <div class=\"text w-100 text-center\">
                    <h1 class=\"mb-4\"> <span>Air</span> Tahu <span>Super</span>.</h1>
                    <p><a href=\"{{ path('produk_sel') }}\" class=\"btn btn-primary py-2 px-4\">Shop Now</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
{# end:: background #}

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center pb-5\">
            <div class=\"col-md-7 heading-section text-center ftco-animate\">
                <h2>Produk</h2>
            </div>
        </div>
        <div class=\"row\">
            {% for rows in produk %}
            {% set stock_terjual = (rows.stock - rows.jumlah) %}
            {% set stock = (rows.jumlah_keranjang == null) ? rows.stock - rows.jumlah : stock_terjual - rows.jumlah_keranjang %}            
            <div class=\"col-md-3 d-flex\">
                <div class=\"product ftco-animate\">
                    <div class=\"img d-flex align-items-center justify-content-center\"
                        style=\"background-image: url('uploads/produk/{{rows.gambar}}');\">
                        <div class=\"desc\">
                            <div class=\"meta-prod d-flex\">
                                {% if stock > 0 %}
                                <form action=\"/user/keranjang/add\" method=\"post\">
                                    <input type=\"hidden\" name=\"inpidusers\" value=\"{{ (app.user) ? app.user.id_users : null }}\" />
                                    <input type=\"hidden\" name=\"inpkdproduk\" value=\"{{ rows.kd_produk }}\" />
                                    <button type=\"submit\" class=\"btn-keranjang\"><span class=\"flaticon-shopping-bag\"></span></button>
                                </form>
                                {% endif %}
                                <a href=\"produk/detail/{{ rows.kd_produk }}\" class=\"d-flex align-items-center justify-content-center\"><span class=\"flaticon-visibility\"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class=\"text text-center\">
                        <span class=\"category\">{{ rows.nama }}</span>
                        <h2 style=\"margin: 0\">{{ stock }}</h2>
                        <p class=\"mb-0\"> <span class=\"price\">Rp. {{ rows.harga|format_rp }}</span> </p>
                    </div>
                </div>
            </div>
            {% endfor %}
        </div>
        <div class=\"row justify-content-center\">
            <div class=\"col-md-4\">
                <a href=\"{{ path('produk_sel') }}\" class=\"btn btn-primary d-block\">Selengkapnya <span class=\"fa fa-long-arrow-right\"></span></a>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "home/index.html.twig", "/home/airtahu.online/templates/home/index.html.twig");
    }
}
