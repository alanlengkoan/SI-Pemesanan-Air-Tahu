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
class __TwigTemplate_4350f0a96024e4a540d33bbbe361e85a6f5896dbf1c12bde6d54ba37898b8d61 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Home";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["produk"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 44
            echo "            ";
            $context["stock_terjual"] = (twig_get_attribute($this->env, $this->source, $context["rows"], "stock", [], "any", false, false, false, 44) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 44));
            // line 45
            echo "            ";
            $context["stock"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah_keranjang", [], "any", false, false, false, 45), null))) ? ((twig_get_attribute($this->env, $this->source, $context["rows"], "stock", [], "any", false, false, false, 45) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 45))) : ((($context["stock_terjual"] ?? null) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah_keranjang", [], "any", false, false, false, 45))));
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
            if ((1 === twig_compare(($context["stock"] ?? null), 0))) {
                // line 53
                echo "                                <form action=\"/user/keranjang/add\" method=\"post\">
                                    <input type=\"hidden\" name=\"inpidusers\" value=\"";
                // line 54
                ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 54)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 54), "id_users", [], "any", false, false, false, 54), "html", null, true))) : (print (null)));
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
            echo twig_escape_filter($this->env, ($context["stock"] ?? null), "html", null, true);
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
        return array (  178 => 74,  173 => 71,  162 => 66,  158 => 65,  154 => 64,  145 => 59,  138 => 55,  134 => 54,  131 => 53,  129 => 52,  123 => 49,  115 => 45,  112 => 44,  108 => 43,  97 => 34,  88 => 27,  77 => 20,  73 => 18,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/airtahu.online/templates/home/index.html.twig");
    }
}
