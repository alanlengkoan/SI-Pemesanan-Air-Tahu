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
class __TwigTemplate_b161cda73bbc8b161c3bcea36757e3647b10f7a69542f3b38e3bce30d7ff6b3f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/checkout.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/checkout.html.twig", 1);
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

        echo "Checkout";
        
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
        echo twig_escape_filter($this->env, (isset($context["kd_order"]) || array_key_exists("kd_order", $context) ? $context["kd_order"] : (function () { throw new RuntimeError('Variable "kd_order" does not exist.', 33, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "nama", [], "any", false, false, false, 41), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "telepon", [], "any", false, false, false, 59), "html", null, true);
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
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "kelamin", [], "any", false, false, false, 71), "L"))) ? ("selected") : (""));
        echo " value=\"L\">Laki - laki
                                        </option>
                                        <option ";
        // line 73
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "kelamin", [], "any", false, false, false, 73), "P"))) ? ("selected") : (""));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "alamat", [], "any", false, false, false, 85), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["checkout"]) || array_key_exists("checkout", $context) ? $context["checkout"] : (function () { throw new RuntimeError('Variable "checkout" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 107
            echo "                                ";
            $context["sum"] = ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 107, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 107));
            // line 108
            echo "                                <tr>
                                    <td><img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 109))), "html", null, true);
            echo "\" width=\"100\" heigth=\"100\" />
                                    </td>
                                    <td>
                                        ";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 112), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 115), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 118)), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <span id=\"sub-total\">";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 121)), "html", null, true);
            echo "</span>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "                                <tr>
                                    <td colspan=\"4\" align=\"center\">
                                        Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 130, $this->source); })())), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"4\" align=\"center\">
                                        Grand Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 138, $this->source); })())), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    ";
        // line 145
        echo "
                    ";
        // line 147
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
        // line 171
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bank"]) || array_key_exists("bank", $context) ? $context["bank"] : (function () { throw new RuntimeError('Variable "bank" does not exist.', 171, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 172
            echo "                                                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_bank", [], "any", false, false, false, 172), "html", null, true);
            echo "\" data-rekening=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "rekening", [], "any", false, false, false, 172), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 172), "html", null, true);
            echo "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
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
        // line 190
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 201
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 202
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  383 => 202,  373 => 201,  354 => 190,  337 => 174,  324 => 172,  320 => 171,  294 => 147,  291 => 145,  282 => 138,  271 => 130,  264 => 125,  254 => 121,  248 => 118,  242 => 115,  236 => 112,  230 => 109,  227 => 108,  224 => 107,  219 => 106,  217 => 105,  203 => 93,  200 => 91,  192 => 85,  177 => 73,  172 => 71,  157 => 59,  145 => 50,  133 => 41,  122 => 33,  114 => 27,  110 => 25,  101 => 18,  89 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Checkout{% endblock %}

{% block body %}
{# begin:: background #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('../assets/user/images/tahu.jpg');\" data-stellar-background-ratio=\"0.5\">
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
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-12 ftco-animate\">

                <form class=\"billing-form\" action=\"/user/finish\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('submit') }}\">
                    {# begin:: form #}
                    <h3 class=\"mb-4 billing-heading\">Detail Pembayaran</h3>
                    <div class=\"row align-items-end\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpkodeorder\">Kode Order</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpkodeorder\" id=\"inpkodeorder\"
                                    value=\"{{ kd_order }}\" readonly=\"readonly\" />
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpnama\">Nama *</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpnama\" id=\"inpnama\"
                                    value=\"{{ user.nama }}\" required=\"required\" />
                                <div id=\"error\"></div>
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpemail\">Email *</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpemail\" id=\"inpemail\"
                                    value=\"{{ user.email }}\" required=\"required\" />
                                <div id=\"error\"></div>
                            </div>
                        </div>
                        <div class=\"w-100\"></div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpnotelpon\">No. Telepon *</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpnotelpon\" id=\"inpnotelpon\"
                                    value=\"{{ user.telepon }}\" required=\"required\" />
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
                                        <option {{ (user.kelamin == 'L') ? 'selected' : '' }} value=\"L\">Laki - laki
                                        </option>
                                        <option {{ (user.kelamin == 'P') ? 'selected' : '' }} value=\"P\">Perempuan
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
                                    required=\"required\">{{ user.alamat }}</textarea>
                                <div id=\"error\"></div>
                            </div>
                        </div>
                    </div>
                    {# end:: form #}

                    {# begin:: table #}
                    <div class=\"table-wrap\">
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
                                {% set sum = 0 %}
                                {% for rows in checkout %}
                                {% set sum = sum + rows.sub_total  %}
                                <tr>
                                    <td><img src=\"{{ asset('uploads/produk/'~rows.gambar) }}\" width=\"100\" heigth=\"100\" />
                                    </td>
                                    <td>
                                        {{ rows.nama }}
                                    </td>
                                    <td>
                                        {{ rows.jumlah }}
                                    </td>
                                    <td>
                                        {{ rows.harga|format_rp }}
                                    </td>
                                    <td>
                                        <span id=\"sub-total\">{{ rows.sub_total|format_rp }}</span>
                                    </td>
                                </tr>
                                {% endfor %}
                                <tr>
                                    <td colspan=\"4\" align=\"center\">
                                        Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">{{ sum|format_rp }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"4\" align=\"center\">
                                        Grand Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">{{ sum|format_rp }}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    {# end:: table #}

                    {# begin:: form pembayaran #}
                    <h3 class=\"mb-4 billing-heading\">Pembayaran</h3>
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
                                            {% for rows in bank %}
                                                <option value=\"{{ rows.id_bank }}\" data-rekening=\"{{ rows.rekening }}\">{{ rows.nama }}</option>
                                            {% endfor %}
                                        </select>
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
                    {# end:: form pembayaran #}

                    <button type=\"submit\" class=\"btn btn-primary py-3 px-4\">
                        Proses
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
{% endblock %}

{% block javascripts %}
<script>
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
{% endblock %}", "home/checkout.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\checkout.html.twig");
    }
}
