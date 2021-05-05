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
class __TwigTemplate_4f3ad6ebc2ab33fafbbc9126665b18ee5148bda6105fd7c6caf9e3e9d2ff166d extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "home/keranjang.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Keranjang";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["keranjang"] ?? null));
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
            $context["sum"] = (($context["sum"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 39));
            // line 40
            echo "                            ";
            $context["stock_terjual"] = (twig_get_attribute($this->env, $this->source, $context["rows"], "stock", [], "any", false, false, false, 40) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 40));
            // line 41
            echo "                            ";
            $context["stock"] = ($context["stock_terjual"] ?? null);
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
            echo twig_escape_filter($this->env, ($context["stock"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["sum"] ?? null)), "html", null, true);
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
    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  230 => 96,  226 => 95,  211 => 83,  199 => 73,  179 => 67,  173 => 64,  169 => 63,  163 => 60,  159 => 59,  150 => 55,  143 => 51,  138 => 49,  131 => 45,  126 => 43,  123 => 42,  120 => 41,  117 => 40,  114 => 39,  96 => 38,  94 => 37,  73 => 18,  59 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/keranjang.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\keranjang.html.twig");
    }
}
