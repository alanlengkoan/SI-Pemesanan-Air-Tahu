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
class __TwigTemplate_785572a6759ed1e5083b554f271d0267600dfed994389e1144237c6b514af2bf extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "home/produk_det.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Detail Produk";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "gambar", [], "any", false, false, false, 43))), "html", null, true);
        echo "\" class=\"image-popup prod-img-bg\">
                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "gambar", [], "any", false, false, false, 44))), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Colorlib Template\">
                </a>
            </div>
            <div class=\"col-lg-6 product-details pl-md-5 ftco-animate\">
                <h3>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "nama", [], "any", false, false, false, 48), "html", null, true);
        echo "</h3>
                <p class=\"price\"><span>Rp. ";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "harga", [], "any", false, false, false, 49)), "html", null, true);
        echo "</span></p>
                ";
        // line 50
        echo twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "tentang", [], "any", false, false, false, 50);
        echo "
                ";
        // line 51
        $context["stock_terjual"] = (twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "stock", [], "any", false, false, false, 51) - twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "jumlah", [], "any", false, false, false, 51));
        // line 52
        echo "                ";
        $context["stock"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "jumlah_keranjang", [], "any", false, false, false, 52), null))) ? ((twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "stock", [], "any", false, false, false, 52) - twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "jumlah", [], "any", false, false, false, 52))) : ((($context["stock_terjual"] ?? null) - twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "jumlah_keranjang", [], "any", false, false, false, 52))));
        // line 53
        echo "                ";
        if ((1 === twig_compare(($context["stock"] ?? null), 0))) {
            // line 54
            echo "                    <form action=\"/user/keranjang/add\" method=\"post\">
                        <input type=\"hidden\" name=\"inpidusers\" value=\"";
            // line 55
            ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 55), "id_users", [], "any", false, false, false, 55), "html", null, true))) : (print (null)));
            echo "\" />
                        <input type=\"hidden\" name=\"inpkdproduk\" value=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["produk"] ?? null), "kd_produk", [], "any", false, false, false, 56), "html", null, true);
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
        return array (  150 => 60,  143 => 56,  139 => 55,  136 => 54,  133 => 53,  130 => 52,  128 => 51,  124 => 50,  120 => 49,  116 => 48,  109 => 44,  105 => 43,  98 => 38,  84 => 27,  80 => 25,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/produk_det.html.twig", "/home/airtahu.online/templates/home/produk_det.html.twig");
    }
}
