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

/* home/keranjang.html.twig */
class __TwigTemplate_0c10232a0e2ab2a2e0acec33c3c4511946f2b53bccd8ea85ab6f1831918a3829 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/keranjang.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/keranjang.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/keranjang.html.twig", 1);
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

        echo "Keranjang";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
                <h2 class=\"mb-0 bread\">Keranjang</h2>
            </div>
        </div>
    </div>
</section>
";
        // line 18
        echo "
<section class=\"ftco-section\">
    <div class=\"container\">
        <form action=\"/user/checkout\" method=\"post\">
            <div class=\"row\">
                <div class=\"table-wrap\">
                    <table class=\"table\">
                        <thead class=\"thead-primary\">
                            <tr>
                                <th>No.</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Sub Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 37
        $context["sum"] = 0;
        // line 38
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keranjang"]) || array_key_exists("keranjang", $context) ? $context["keranjang"] : (function () { throw new RuntimeError('Variable "keranjang" does not exist.', 38, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 39
            echo "                            ";
            $context["sum"] = ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 39, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 39));
            // line 40
            echo "                            ";
            $context["stock_terjual"] = (twig_get_attribute($this->env, $this->source, $context["rows"], "stock", [], "any", false, false, false, 40) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 40));
            // line 41
            echo "                            ";
            $context["stock"] = (isset($context["stock_terjual"]) || array_key_exists("stock_terjual", $context) ? $context["stock_terjual"] : (function () { throw new RuntimeError('Variable "stock_terjual" does not exist.', 41, $this->source); })());
            // line 42
            echo "                            <tr class=\"alert\" role=\"alert\">
\t\t\t\t\t\t    \t<td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
            echo " </td>
\t\t\t\t\t\t    \t<td>
\t\t\t\t\t\t    \t\t<img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 45))), "html", null, true);
            echo "\" width=\"100\" heigth=\"100\" />
\t\t\t\t\t\t    \t</td>
\t\t\t\t\t\t    \t<td>
                                    <div class=\"email\">
\t\t\t\t\t\t    \t\t\t<span>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 49), "html", null, true);
            echo "</span>
\t\t\t\t\t\t    \t\t</div>
                                    <input type=\"hidden\" name=\"inpidkeranjang[]\" id=\"inpidkeranjang\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_keranjang", [], "any", false, false, false, 51), "html", null, true);
            echo "\" />
\t\t\t\t\t\t    \t</td>
\t\t\t\t\t\t    \t<td>
\t\t\t\t\t\t    \t\t<div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" onkeydown=\"return justAngka(event)\" name=\"inpjumlah[]\" id=\"inpjumlah\" data-stock=\"";
            // line 55
            echo twig_escape_filter($this->env, (isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 55, $this->source); })()), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah_keranjang", [], "any", false, false, false, 55), "html", null, true);
            echo "\" />
\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t    \t</td>
\t\t\t\t\t\t    \t<td>
                                    ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 59)), "html", null, true);
            echo "
                                    <input type=\"hidden\" name=\"inpharga[]\" id=\"inpharga\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 60), "html", null, true);
            echo "\" />
                                </td>
\t\t\t\t\t\t    \t<td>
                                    <span id=\"sub-total\">";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 63)), "html", null, true);
            echo "</span>
                                    <input type=\"hidden\" name=\"inpsubtotal[]\" id=\"inpsubtotal\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 64), "html", null, true);
            echo "\" />
                                </td>
\t\t\t\t\t\t    \t<td>
                                    <button type=\"button\" id=\"del\" data-id=\"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_keranjang", [], "any", false, false, false, 67), "html", null, true);
            echo "\" class=\"close\">
                                        <span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span>
                                    </button>
\t\t\t\t\t\t    \t</td>
\t\t\t\t\t\t    </tr>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"row justify-content-end\">
                <div class=\"col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate\">
                    <div class=\"cart-total mb-3\">
                        <h3>Cart Totals</h3>
                        <p class=\"d-flex total-price\">
                            <span>Total</span>
                            <span id=\"total\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 83, $this->source); })())), "html", null, true);
        echo "</span>
                        </p>
                    </div>
                    <p class=\"text-center\"><a href=\"/produk\" class=\"btn btn-primary py-3 px-4\">Lanjut Belanja</a></p>
                    <button type=\"submit\" class=\"btn btn-primary py-3 px-4\">Checkout</button>
                </div>
            </div>
        </form>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "<script>
    // untuk ubah jumlah
    var untukUbahJumlah = function () {
        \$('body').on('input', '#inpjumlah', function () {
            var txt1 = \$(this).val();
            var txt2 = \$(this).parent().parent().parent().find('#inpharga').val();
            var stock = \$(this).data('stock');

            // untuk membatasi value stock
            if (txt1 >= stock) {
                \$(this).val(Math.max(Math.min(txt1, stock), -stock));
                txt1 = stock;
            } else {
                txt1 = txt1;
            }

            var total = \$('[id=\"inpsubtotal\"]');
            var jumlah = parseInt(txt1) * parseInt(txt2);

            if (txt1 == 0 || isNaN(jumlah)) {
                \$(this).parent().parent().parent().find('#sub-total').html('0')
                \$(this).parent().parent().parent().find('#inpsubtotal').val('0')
            } else {
                \$(this).parent().parent().parent().find('#sub-total').html(autoSeparator(jumlah))
                \$(this).parent().parent().parent().find('#inpsubtotal').val(jumlah)
            }

            var totalSum = [];
            for (let i = 0; i < total.length; i++) {
                totalSum.push(parseInt(\$(total[i]).val()));
            }

            var sum = totalSum.reduce(function (a, b) {
                return a + b;
            }, 0);

            \$('#total').html(autoSeparator(sum));
        });
    }();

    // untuk hapus data
    var untukHapusData = function() {
        \$(document).on('click', '#del', function() {
            var ini = \$(this);

            if (confirm(\"Apakah Anda yakin ingin menghapusnya?\")) {
                \$.ajax({
                    type: \"post\",
                    url: \"keranjang/del\",
                    dataType: 'json',
                    data: {
                        id: ini.data('id')
                    },
                    beforeSend: function() {
                        ini.attr('disabled', 'disabled');
                        ini.html('<i class=\"fa fa-spinner\"></i>');
                    },
                    success: function(data) {
                        alert(data.msg);
                        location.reload();
                    }
                });
            } else {
                return false;
            }
        });
    }();

    // untuk angka
\tfunction justAngka(e) {
\t\tif (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 77]) !== -1 ||
\t\t\t(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
\t\t\t(e.keyCode >= 35 && e.keyCode <= 40)) {
\t\t\treturn;
\t\t}
\t\tif ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
\t\t\te.preventDefault();
\t\t}
\t};

    // untuk format harga
\tfunction autoSeparator(Num) {
\t\tNum += '';
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tx = Num.split('.');
\t\tx1 = x[0];
\t\tx2 = x.length > 1 ? '.' + x[1] : '';
\t\tvar rgx = /(\\d+)(\\d{3})/;
\t\twhile (rgx.test(x1))
\t\t\tx1 = x1.replace(rgx, '\$1' + '.' + '\$2');
\t\treturn x1 + x2;
\t};
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/keranjang.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 96,  262 => 95,  241 => 83,  229 => 73,  209 => 67,  203 => 64,  199 => 63,  193 => 60,  189 => 59,  180 => 55,  173 => 51,  168 => 49,  161 => 45,  156 => 43,  153 => 42,  150 => 41,  147 => 40,  144 => 39,  126 => 38,  124 => 37,  103 => 18,  89 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Keranjang{% endblock %}

{% block body %}
{# begin:: background #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/user/images/tahu.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">Keranjang</h2>
            </div>
        </div>
    </div>
</section>
{# end:: background #}

<section class=\"ftco-section\">
    <div class=\"container\">
        <form action=\"/user/checkout\" method=\"post\">
            <div class=\"row\">
                <div class=\"table-wrap\">
                    <table class=\"table\">
                        <thead class=\"thead-primary\">
                            <tr>
                                <th>No.</th>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                                <th>Harga</th>
                                <th>Sub Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% set sum = 0 %}
                            {% for rows in keranjang %}
                            {% set sum = sum + rows.sub_total  %}
                            {% set stock_terjual = (rows.stock - rows.jumlah) %}
                            {% set stock = stock_terjual %}
                            <tr class=\"alert\" role=\"alert\">
\t\t\t\t\t\t    \t<td>{{ loop.index }} </td>
\t\t\t\t\t\t    \t<td>
\t\t\t\t\t\t    \t\t<img src=\"{{ asset('uploads/produk/'~rows.gambar) }}\" width=\"100\" heigth=\"100\" />
\t\t\t\t\t\t    \t</td>
\t\t\t\t\t\t    \t<td>
                                    <div class=\"email\">
\t\t\t\t\t\t    \t\t\t<span>{{ rows.nama }}</span>
\t\t\t\t\t\t    \t\t</div>
                                    <input type=\"hidden\" name=\"inpidkeranjang[]\" id=\"inpidkeranjang\" value=\"{{ rows.id_keranjang }}\" />
\t\t\t\t\t\t    \t</td>
\t\t\t\t\t\t    \t<td>
\t\t\t\t\t\t    \t\t<div class=\"input-group\">
                                        <input type=\"text\" class=\"form-control\" onkeydown=\"return justAngka(event)\" name=\"inpjumlah[]\" id=\"inpjumlah\" data-stock=\"{{ stock }}\" value=\"{{ rows.jumlah_keranjang }}\" />
\t\t\t\t\t\t    \t\t</div>
\t\t\t\t\t\t    \t</td>
\t\t\t\t\t\t    \t<td>
                                    {{ rows.harga|format_rp }}
                                    <input type=\"hidden\" name=\"inpharga[]\" id=\"inpharga\" value=\"{{ rows.harga }}\" />
                                </td>
\t\t\t\t\t\t    \t<td>
                                    <span id=\"sub-total\">{{ rows.sub_total|format_rp }}</span>
                                    <input type=\"hidden\" name=\"inpsubtotal[]\" id=\"inpsubtotal\" value=\"{{ rows.sub_total }}\" />
                                </td>
\t\t\t\t\t\t    \t<td>
                                    <button type=\"button\" id=\"del\" data-id=\"{{ rows.id_keranjang }}\" class=\"close\">
                                        <span aria-hidden=\"true\"><i class=\"fa fa-close\"></i></span>
                                    </button>
\t\t\t\t\t\t    \t</td>
\t\t\t\t\t\t    </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=\"row justify-content-end\">
                <div class=\"col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate\">
                    <div class=\"cart-total mb-3\">
                        <h3>Cart Totals</h3>
                        <p class=\"d-flex total-price\">
                            <span>Total</span>
                            <span id=\"total\">{{ sum|format_rp }}</span>
                        </p>
                    </div>
                    <p class=\"text-center\"><a href=\"/produk\" class=\"btn btn-primary py-3 px-4\">Lanjut Belanja</a></p>
                    <button type=\"submit\" class=\"btn btn-primary py-3 px-4\">Checkout</button>
                </div>
            </div>
        </form>
    </div>
</section>
{% endblock %}

{% block javascripts %}
<script>
    // untuk ubah jumlah
    var untukUbahJumlah = function () {
        \$('body').on('input', '#inpjumlah', function () {
            var txt1 = \$(this).val();
            var txt2 = \$(this).parent().parent().parent().find('#inpharga').val();
            var stock = \$(this).data('stock');

            // untuk membatasi value stock
            if (txt1 >= stock) {
                \$(this).val(Math.max(Math.min(txt1, stock), -stock));
                txt1 = stock;
            } else {
                txt1 = txt1;
            }

            var total = \$('[id=\"inpsubtotal\"]');
            var jumlah = parseInt(txt1) * parseInt(txt2);

            if (txt1 == 0 || isNaN(jumlah)) {
                \$(this).parent().parent().parent().find('#sub-total').html('0')
                \$(this).parent().parent().parent().find('#inpsubtotal').val('0')
            } else {
                \$(this).parent().parent().parent().find('#sub-total').html(autoSeparator(jumlah))
                \$(this).parent().parent().parent().find('#inpsubtotal').val(jumlah)
            }

            var totalSum = [];
            for (let i = 0; i < total.length; i++) {
                totalSum.push(parseInt(\$(total[i]).val()));
            }

            var sum = totalSum.reduce(function (a, b) {
                return a + b;
            }, 0);

            \$('#total').html(autoSeparator(sum));
        });
    }();

    // untuk hapus data
    var untukHapusData = function() {
        \$(document).on('click', '#del', function() {
            var ini = \$(this);

            if (confirm(\"Apakah Anda yakin ingin menghapusnya?\")) {
                \$.ajax({
                    type: \"post\",
                    url: \"keranjang/del\",
                    dataType: 'json',
                    data: {
                        id: ini.data('id')
                    },
                    beforeSend: function() {
                        ini.attr('disabled', 'disabled');
                        ini.html('<i class=\"fa fa-spinner\"></i>');
                    },
                    success: function(data) {
                        alert(data.msg);
                        location.reload();
                    }
                });
            } else {
                return false;
            }
        });
    }();

    // untuk angka
\tfunction justAngka(e) {
\t\tif (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 77]) !== -1 ||
\t\t\t(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
\t\t\t(e.keyCode >= 35 && e.keyCode <= 40)) {
\t\t\treturn;
\t\t}
\t\tif ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
\t\t\te.preventDefault();
\t\t}
\t};

    // untuk format harga
\tfunction autoSeparator(Num) {
\t\tNum += '';
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tx = Num.split('.');
\t\tx1 = x[0];
\t\tx2 = x.length > 1 ? '.' + x[1] : '';
\t\tvar rgx = /(\\d+)(\\d{3})/;
\t\twhile (rgx.test(x1))
\t\t\tx1 = x1.replace(rgx, '\$1' + '.' + '\$2');
\t\treturn x1 + x2;
\t};
</script>
{% endblock %}", "home/keranjang.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\keranjang.html.twig");
    }
}
