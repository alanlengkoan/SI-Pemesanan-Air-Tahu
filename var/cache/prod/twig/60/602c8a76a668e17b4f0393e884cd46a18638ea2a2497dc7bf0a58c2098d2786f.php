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

/* home/checkout.html.twig */
class __TwigTemplate_ff259d88f1599faed380a2cebb07c0f5dd1758243e828d61df5836e0f52ce54b extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "home/checkout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Checkout";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('../assets/user/images/tahu.jpg');\" data-stellar-background-ratio=\"0.5\">
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
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-12 ftco-animate\">

                <form class=\"billing-form\" action=\"/user/finish\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("submit"), "html", null, true);
        echo "\">
                    ";
        // line 27
        echo "                    <h3 class=\"mb-4 billing-heading\">Detail Pembayaran</h3>
                    <div class=\"row align-items-end\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpkodeorder\">Kode Order</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpkodeorder\" id=\"inpkodeorder\"
                                    value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["kd_order"] ?? null), "html", null, true);
        echo "\" readonly=\"readonly\" />
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpnama\">Nama *</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpnama\" id=\"inpnama\"
                                    value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nama", [], "any", false, false, false, 41), "html", null, true);
        echo "\" required=\"required\" />
                                <div id=\"error\"></div>
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpemail\">Email *</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpemail\" id=\"inpemail\"
                                    value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 50), "html", null, true);
        echo "\" required=\"required\" />
                                <div id=\"error\"></div>
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpnotelpon\">No. Telepon *</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpnotelpon\" id=\"inpnotelpon\"
                                    value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "telepon", [], "any", false, false, false, 59), "html", null, true);
        echo "\" required=\"required\" />
                                <div id=\"error\"></div>
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpkelamin\">Jenis Kelamin *</label>
                                <div class=\"select-wrap\">
                                    <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                                    <select class=\"form-control\" name=\"inpkelamin\" id=\"inpkelamin\" required=\"required\">
                                        <option value=\"\">- Pilih -</option>
                                        <option ";
        // line 71
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "kelamin", [], "any", false, false, false, 71), "L"))) ? ("selected") : (""));
        echo " value=\"L\">Laki - laki
                                        </option>
                                        <option ";
        // line 73
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "kelamin", [], "any", false, false, false, 73), "P"))) ? ("selected") : (""));
        echo " value=\"P\">Perempuan
                                        </option>
                                    </select>
                                    <div id=\"error\"></div>
                                </div>
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpalamat\">Alamat *</label>
                                <textarea class=\"form-control\" name=\"inpalamat\" id=\"inpalamat\"
                                    required=\"required\">";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "alamat", [], "any", false, false, false, 85), "html", null, true);
        echo "</textarea>
                                <div id=\"error\"></div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 91
        echo "
                    ";
        // line 93
        echo "                    <div class=\"table-wrap\">
                        <table class=\"table\">
                            <thead class=\"thead-primary\">
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 105
        $context["sum"] = 0;
        // line 106
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["checkout"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 107
            echo "                                ";
            $context["sum"] = (($context["sum"] ?? null) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 107));
            // line 108
            echo "                                <tr>
                                    <td><img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 109))), "html", null, true);
            echo "\" width=\"100\"
                                            heigth=\"100\" />
                                    </td>
                                    <td>
                                        ";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 113), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 116), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 119)), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <span id=\"sub-total\">";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 122)), "html", null, true);
            echo "</span>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "                                <tr>
                                    <td colspan=\"4\" align=\"center\">
                                        Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["sum"] ?? null)), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"4\" align=\"center\">
                                        Grand Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["sum"] ?? null)), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    ";
        // line 146
        echo "
                    ";
        // line 148
        echo "                    <h3 class=\"mb-4 billing-heading\">Pembayaran</h3>
                    <div class=\"row align-items-end\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpmetodepembayaran\">Metode Pembayaran *</label>
                                <div class=\"select-wrap\">
                                    <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                                    <select class=\"form-control\" name=\"inpmetodepembayaran\" id=\"inpmetodepembayaran\" required=\"required\">
                                         <option value=\"\">- Pilih -</option>
                                        <option value=\"c\">COD</option>
                                        <option value=\"t\">Transfer</option>
                                    </select>
                                </div>
                            </div>
                        </div>                        
                        <div id=\"transfer\" style=\"display: none;\">
                            <div class=\"w-100\"></div>
                            <div class=\"col-md-12\">
                                <div class=\"form-group\">
                                    <label for=\"inpidbank\">Bank *</label>
                                    <div class=\"select-wrap\">
                                        <div class=\"icon\"><span class=\"ion-ios-arrow-down\"></span></div>
                                        <select class=\"form-control\" name=\"inpidbank\" id=\"inpidbank\">
                                            <option value=\"\">- Pilih -</option>
                                            ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bank"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 173
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_bank", [], "any", false, false, false, 173), "html", null, true);
            echo "\" data-rekening=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "rekening", [], "any", false, false, false, 173), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 173), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id=\"nomor_rekening\" style=\"display: none\">
                                <div class=\"w-100\"></div>
                                <div class=\"col-md-12\">
                                    <div class=\"form-group\">
                                        <label for=\"inpkodeorder\">Nomor Rekening</label>
                                        <input class=\"form-control\" type=\"text\" id=\"inprekening\" value=\"0\" readonly=\"readonly\" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        // line 191
        echo "
                    <button type=\"submit\" class=\"btn btn-primary py-3 px-4\">
                        Proses
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 202
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 203
        echo "<script>
    // untuk pilih metode pembayaran
    var untukMetodePembayaran = function () {
        \$(document).on('change', '#inpmetodepembayaran', function () {
            var ini = \$(this);
            var val = ini.val();

            if (val == 't') {
                \$('#transfer').attr('style', 'width: 100%');
                \$('#inpidbank').attr('required', 'required');
            } else {
                \$('#transfer').attr('style', 'display: none');
                \$('#inpidbank').removeAttr('required');
                \$('#inpidbank').val('');
            }
        });
    }();

    // untuk tampilkan nomor rekening
    var untukNoRekening = function(){
        \$(document).on('change', '#inpidbank', function () {
            var ini = \$(this);
            var no_rekening = ini.find(':selected').data('rekening');

            if (ini.val() != '') {
                \$('#nomor_rekening').attr('style', 'width: 100%');
                \$('#inprekening').val(no_rekening);
            } else {
                \$('#nomor_rekening').attr('style', 'display: none');
            }
        });
    }();

    // untuk angka
    function justAngka(e) {
        if (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 77]) !== -1 ||
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    };

    // untuk format harga
    function autoSeparator(Num) {
        Num += '';
        Num = Num.replace('.', '');
        Num = Num.replace('.', '');
        Num = Num.replace('.', '');
        Num = Num.replace('.', '');
        Num = Num.replace('.', '');
        Num = Num.replace('.', '');
        x = Num.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\\d+)(\\d{3})/;
        while (rgx.test(x1))
            x1 = x1.replace(rgx, '\$1' + '.' + '\$2');
        return x1 + x2;
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "home/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 203,  338 => 202,  325 => 191,  308 => 175,  295 => 173,  291 => 172,  265 => 148,  262 => 146,  253 => 139,  242 => 131,  235 => 126,  225 => 122,  219 => 119,  213 => 116,  207 => 113,  200 => 109,  197 => 108,  194 => 107,  189 => 106,  187 => 105,  173 => 93,  170 => 91,  162 => 85,  147 => 73,  142 => 71,  127 => 59,  115 => 50,  103 => 41,  92 => 33,  84 => 27,  80 => 25,  71 => 18,  59 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/checkout.html.twig", "/home/airtahu.online/templates/home/checkout.html.twig");
    }
}
