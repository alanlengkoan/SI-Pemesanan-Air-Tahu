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

/* home/produk.html.twig */
class __TwigTemplate_ceec60e557784e2b60212b1c4ac9daa171a9ed9c9477f6ead96d248ee101654e extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "home/produk.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Produk";
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

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/images/tahu.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">Produk</h2>
            </div>
        </div>
    </div>
</section>
";
        // line 32
        echo "
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produk"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 39
            echo "                    ";
            $context["stock_terjual"] = (twig_get_attribute($this->env, $this->source, $context["rows"], "stock", [], "any", false, false, false, 39) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 39));
            // line 40
            echo "                    ";
            $context["stock"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah_keranjang", [], "any", false, false, false, 40), null))) ? ((twig_get_attribute($this->env, $this->source, $context["rows"], "stock", [], "any", false, false, false, 40) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 40))) : ((($context["stock_terjual"] ?? null) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah_keranjang", [], "any", false, false, false, 40))));
            // line 41
            echo "                    <div class=\"col-lg-4 d-flex\" style=\"padding: 15px;\">
                        <div class=\"card\" style=\"width: 100%\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 44), "html", null, true);
            echo "</h5>
                                <p class=\"card-text\">
                                    ";
            // line 46
            echo twig_escape_filter($this->env, ($context["stock"] ?? null), "html", null, true);
            echo "
                                    <br />
                                    Rp. ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 48)), "html", null, true);
            echo "
                                </p>
                                ";
            // line 50
            if ((1 === twig_compare(($context["stock"] ?? null), 0))) {
                // line 51
                echo "                                <button id=\"btn-keranjang\" type=\"button\" data-idusers=\"";
                ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 51), "id_users", [], "any", false, false, false, 51), "html", null, true))) : (print (null)));
                echo "\" data-kdproduk=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_produk", [], "any", false, false, false, 51), "html", null, true);
                echo "\" class=\"btn btn-primary\"><span class=\"flaticon-shopping-bag\"></span></button>
                                ";
            }
            // line 53
            echo "                                <a href=\"produk/detail/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_produk", [], "any", false, false, false, 53), "html", null, true);
            echo "\" class=\"btn btn-primary\"><span class=\"flaticon-visibility\"></span></a>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 65
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "<script>
    // untuk ubah data
    var untukUbahAkun = function() {
        \$(document).on('click', '#btn-keranjang', function(e) {
            e.preventDefault();
            var ini = \$(this);
            var idUsers = ini.data('idusers');
            var kdProduk = ini.data('kdproduk');

            if (idUsers === '') {
                window.location = 'login/user';
            } else {
                \$.ajax({
                    method: 'post',
                    url: '/user/keranjang/add',
                    dataType: 'json',
                    data: {
                        inpidusers: idUsers,
                        inpkdproduk: kdProduk,
                    },
                    beforeSend: function () {
                        ini.attr('disabled', 'disabled');
                    },
                    success: function (data) {
                        window.location = 'user/keranjang';
                    }
                });
            }
        });
    }();
</script>
";
    }

    public function getTemplateName()
    {
        return "home/produk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 66,  161 => 65,  152 => 58,  140 => 53,  132 => 51,  130 => 50,  125 => 48,  120 => 46,  115 => 44,  110 => 41,  107 => 40,  104 => 39,  100 => 38,  92 => 32,  78 => 21,  74 => 19,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/produk.html.twig", "/home/airtahu.online/templates/home/produk.html.twig");
    }
}
