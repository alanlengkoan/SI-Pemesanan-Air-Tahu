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

/* admin/pemesanan/detail.html.twig */
class __TwigTemplate_0f4c8a60404e5d84e3184d704e6dcf04cac39e5fbb208b8f8e73772a9a9a457e extends Template
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
        return "admin/layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pemesanan/detail.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/pemesanan/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Detail Pemesanan";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</h2>
        </div>
    </div>
</div>
";
        // line 15
        echo "
";
        // line 17
        echo "<div class=\"container-fluid\">
    ";
        // line 19
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Biodata Pemesanan</h3>
                    <hr>
                    <form class=\"form\" action=\"##\" method=\"post\" id=\"registrationForm\">
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"nama\" class=\"text-dark\">
                                    <h4>Kode Order</h4>
                                </label>
                                <input type=\"text\" id=\"inpkdpemesanan\" class=\"form-control-plaintext\" placeholder=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 31, $this->source); })()), "kd_pemesanan", [], "any", false, false, false, 31), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"email\" class=\"text-dark\">
                                    <h4>Nama</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 39, $this->source); })()), "nama", [], "any", false, false, false, 39), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Email</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>No. Telepon</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 55, $this->source); })()), "telepon", [], "any", false, false, false, 55), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Jenis Kelamin</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 63
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 63, $this->source); })()), "kelamin", [], "any", false, false, false, 63), "L"))) ? ("Laki - laki") : ("Perempuan"));
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Alamat</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 71, $this->source); })()), "alamat", [], "any", false, false, false, 71), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Tanggal Pemesanan</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 79, $this->source); })()), "tgl_pemesanan", [], "any", false, false, false, 79), "d-m-Y"), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Jam Pemesanan</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 87, $this->source); })()), "tgl_pemesanan", [], "any", false, false, false, 87), "H:i:s"), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <br>
                        <h3 class=\"card-title\">Pembayaran</h3>
                        <hr>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Metode Pembayaran</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 98
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 98, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 98), "c"))) ? ("COD") : ("Transfer"));
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Status Pembayaran</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 106
        echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 106, $this->source); })()), "status_pembayaran", [], "any", false, false, false, 106), 0))) ? ("Menunggu Pembayaran") : ("Telah Melakukan Pembayaran"));
        echo "\" readonly>
                            </div>
                        </div>
                        ";
        // line 109
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 109, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 109), "t"))) {
            // line 110
            echo "                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Bank</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 115, $this->source); })()), "nama", [], "any", false, false, false, 115), "html", null, true);
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Nomor Rekening</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 123, $this->source); })()), "rekening", [], "any", false, false, false, 123), "html", null, true);
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Nomor Penyetor</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 131
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 131, $this->source); })()), "nama_penyetor", [], "any", false, false, false, 131), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 131, $this->source); })()), "nama_penyetor", [], "any", false, false, false, 131), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Atas Nama</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 139
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 139, $this->source); })()), "atas_nama", [], "any", false, false, false, 139), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 139, $this->source); })()), "atas_nama", [], "any", false, false, false, 139), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jumlah Transfer</h4>
                                    </label>
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" name=\"inpjumlahtransfer\" id=\"inpjumlahtransfer\" ";
            // line 148
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 148, $this->source); })()), "jumlah_transfer", [], "any", false, false, false, 148), null))) ? (print ("class=\"form-control\" placeholder=\"Jumlah transfer\" onkeydown=\"return justAngka(event)\" onkeyup=\"javascript:this.value=autoSeparator(this.value);\"")) : (print (twig_escape_filter($this->env, (("class=form-control-plaintext placeholder=" . $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 148, $this->source); })()), "jumlah_transfer", [], "any", false, false, false, 148))) . " readonly"), "html", null, true))));
            echo " />
                                        ";
            // line 149
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 149, $this->source); })()), "jumlah_transfer", [], "any", false, false, false, 149), null))) {
                // line 150
                echo "                                        <div class=\"input-group-prepend\">
                                            <button class=\"btn btn-primary btn-outline\" id=\"btn-simpan\" type=\"button\"><i class=\"fa fa-save\"></i></button>
                                        </div>
                                        ";
            }
            // line 154
            echo "                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Tanggal Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 162
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 162, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 162), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 162, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 162), "d-m-Y"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 170
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 170, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 170), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 170, $this->source); })()), "tanggal_transfer", [], "any", false, false, false, 170), "H:i:s"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Bukti</h4>
                                    </label>
                                    ";
            // line 178
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 178, $this->source); })()), "bukti", [], "any", false, false, false, 178), null))) {
                // line 179
                echo "                                        - 
                                    ";
            } else {
                // line 181
                echo "                                        <a href=\"#\" onclick=\"viewImage()\">
                                            <img src=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bukti/" . twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 182, $this->source); })()), "bukti", [], "any", false, false, false, 182))), "html", null, true);
                echo "\" width=\"100\" heigth=\"100\" />
                                        </a>
                                    ";
            }
            // line 185
            echo "                                </div>
                            </div>
                        ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 187
(isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 187, $this->source); })()), "metode_pembayaran", [], "any", false, false, false, 187), "c"))) {
            // line 188
            echo "                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 193
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 193, $this->source); })()), "nama_bayar", [], "any", false, false, false, 193), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 193, $this->source); })()), "nama_bayar", [], "any", false, false, false, 193), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jumlah Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 201
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 201, $this->source); })()), "jumlah_bayar", [], "any", false, false, false, 201), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 201, $this->source); })()), "jumlah_bayar", [], "any", false, false, false, 201)), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Tanggal Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 209
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 209, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 209), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 209, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 209), "d-m-Y"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
            // line 217
            (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 217, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 217), null))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_cod"]) || array_key_exists("data_pembayaran_cod", $context) ? $context["data_pembayaran_cod"] : (function () { throw new RuntimeError('Variable "data_pembayaran_cod" does not exist.', 217, $this->source); })()), "tanggal_bayar", [], "any", false, false, false, 217), "H:i:s"), "html", null, true))));
            echo "\" readonly>
                                </div>
                            </div>
                            ";
            // line 220
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 220, $this->source); })()), "status_pembayaran", [], "any", false, false, false, 220), "0"))) {
                // line 221
                echo "                                 <div class=\"form-group\">
                                     <div class=\"col-xs-12\"><br>
                                        <a class=\"btn btn-lg btn-success btn-sm btn-rounded\" href=\"/admin/pemesanan/bayar/";
                // line 223
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pemesanan"]) || array_key_exists("data_pemesanan", $context) ? $context["data_pemesanan"] : (function () { throw new RuntimeError('Variable "data_pemesanan" does not exist.', 223, $this->source); })()), "kd_pemesanan", [], "any", false, false, false, 223), "html", null, true);
                echo "\"><i class=\"fa fa-money\"></i>&nbsp;Bayar</a>
                                     </div>
                                 </div>
                            ";
            }
            // line 227
            echo "                        ";
        }
        // line 228
        echo "                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 234
        echo "    ";
        // line 235
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    <div class=\"table-responsive\">
                        <table id=\"tabel_pemesanan\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 254
        $context["sum"] = 0;
        // line 255
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data_pemesanan_detail"]) || array_key_exists("data_pemesanan_detail", $context) ? $context["data_pemesanan_detail"] : (function () { throw new RuntimeError('Variable "data_pemesanan_detail" does not exist.', 255, $this->source); })()));
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
            // line 256
            echo "                                ";
            $context["sum"] = ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 256, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 256));
            // line 257
            echo "                                <tr>
                                    <td>";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 258), "html", null, true);
            echo " </td>
                                    <td><img src=\"";
            // line 259
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 259))), "html", null, true);
            echo "\" width=\"100\" heigth=\"100\" /></td>
                                    <td>";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 260), "html", null, true);
            echo "</td>
                                    <td>";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 261), "html", null, true);
            echo "</td>
                                    <td align=\"center\">";
            // line 262
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 262)), "html", null, true);
            echo "</td>
                                    <td align=\"center\"><span id=\"sub-total\">";
            // line 263
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "sub_total", [], "any", false, false, false, 263)), "html", null, true);
            echo "</span></td>
                                </tr>
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
        // line 266
        echo "                                <tr>
                                    <td colspan=\"5\" align=\"center\">
                                        Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 271, $this->source); })())), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"5\" align=\"center\">
                                        Grand Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 279, $this->source); })())), "html", null, true);
        echo "</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <a class=\"btn btn-lg btn-danger btn-sm btn-rounded\" href=\"/admin/pemesanan\"><i class=\"fa fa-arrow-left\"></i>&nbsp;Kembali</a>
                    <a class=\"btn btn-lg btn-info btn-sm btn-rounded\" href=\"#\"><i class=\"fa fa-print\"></i>&nbsp;Cetak</a>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 293
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 297
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 298
        echo "<script>
    var untukUbahAkun = function() {
        \$(document).on('click', '#btn-simpan', function(e) {
            e.preventDefault();
            var ini = \$(this);
            var kdPemesanan = \$('#inpkdpemesanan').attr('placeholder');
            var jumlahTransfer = \$('#inpjumlahtransfer').val();

            if (jumlahTransfer === '') {
                \$('#inpjumlahtransfer').attr('required', 'required');
                alert('Jumlah Transfer tidak boleh kosong!');
            } else {
                \$.ajax({
                    method: 'post',
                    url: '/admin/pembayaran_transfer',
                    dataType: 'json',
                    data: {
                        inpkdorder: kdPemesanan,
                        inpjumlahtransfer: jumlahTransfer,
                    },
                    beforeSend: function () {
                        ini.attr('disabled', 'disabled');
                    },
                    success: function (data) {
                        alert(data.msg);
                        location.reload()
                    }
                });
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

    // untuk lihat gambar pada tab baru
    function viewImage(url) {
        window.open(\"";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/bukti/" . twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 362, $this->source); })()), "bukti", [], "any", false, false, false, 362))), "html", null, true);
        echo "\");
    }
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/pemesanan/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 362,  537 => 298,  530 => 297,  522 => 293,  506 => 279,  495 => 271,  488 => 266,  471 => 263,  467 => 262,  463 => 261,  459 => 260,  455 => 259,  451 => 258,  448 => 257,  445 => 256,  427 => 255,  425 => 254,  404 => 235,  402 => 234,  395 => 228,  392 => 227,  385 => 223,  381 => 221,  379 => 220,  373 => 217,  362 => 209,  351 => 201,  340 => 193,  333 => 188,  331 => 187,  327 => 185,  321 => 182,  318 => 181,  314 => 179,  312 => 178,  301 => 170,  290 => 162,  280 => 154,  274 => 150,  272 => 149,  268 => 148,  256 => 139,  245 => 131,  234 => 123,  223 => 115,  216 => 110,  214 => 109,  208 => 106,  197 => 98,  183 => 87,  172 => 79,  161 => 71,  150 => 63,  139 => 55,  128 => 47,  117 => 39,  106 => 31,  92 => 19,  89 => 17,  86 => 15,  79 => 10,  74 => 7,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout_admin.html.twig' %}

{% block title %}Detail Pemesanan{% endblock %}

{% block body %}
{# begin:: head #}
<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">{{ halaman }}</h2>
        </div>
    </div>
</div>
{# end:: head #}

{# begin:: body #}
<div class=\"container-fluid\">
    {# begin:: form #}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Biodata Pemesanan</h3>
                    <hr>
                    <form class=\"form\" action=\"##\" method=\"post\" id=\"registrationForm\">
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"nama\" class=\"text-dark\">
                                    <h4>Kode Order</h4>
                                </label>
                                <input type=\"text\" id=\"inpkdpemesanan\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.kd_pemesanan }}\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"email\" class=\"text-dark\">
                                    <h4>Nama</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.nama }}\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Email</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.email }}\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>No. Telepon</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.telepon }}\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Jenis Kelamin</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pemesanan.kelamin == 'L') ? 'Laki - laki' : 'Perempuan' }}\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Alamat</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.alamat }}\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Tanggal Pemesanan</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.tgl_pemesanan|date('d-m-Y') }}\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Jam Pemesanan</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pemesanan.tgl_pemesanan|date('H:i:s') }}\" readonly>
                            </div>
                        </div>
                        <br>
                        <h3 class=\"card-title\">Pembayaran</h3>
                        <hr>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Metode Pembayaran</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pemesanan.metode_pembayaran == 'c') ? 'COD' : 'Transfer' }}\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Status Pembayaran</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pemesanan.status_pembayaran == 0) ? 'Menunggu Pembayaran' : 'Telah Melakukan Pembayaran' }}\" readonly>
                            </div>
                        </div>
                        {% if data_pemesanan.metode_pembayaran == 't' %}
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Bank</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pembayaran_detail.nama }}\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Nomor Rekening</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pembayaran_detail.rekening }}\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Nomor Penyetor</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pembayaran_detail.nama_penyetor == null) ? '-' : data_pembayaran_detail.nama_penyetor }}\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Atas Nama</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pembayaran_detail.atas_nama == null) ? '-' : data_pembayaran_detail.atas_nama }}\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jumlah Transfer</h4>
                                    </label>
                                    <div class=\"input-group mb-3\">
                                        <input type=\"text\" name=\"inpjumlahtransfer\" id=\"inpjumlahtransfer\" {{ (data_pembayaran_detail.jumlah_transfer == null ? 'class=\"form-control\" placeholder=\"Jumlah transfer\" onkeydown=\"return justAngka(event)\" onkeyup=\"javascript:this.value=autoSeparator(this.value);\"' : 'class=form-control-plaintext placeholder='~data_pembayaran_detail.jumlah_transfer|format_rp~' readonly') }} />
                                        {% if data_pembayaran_detail.jumlah_transfer == null %}
                                        <div class=\"input-group-prepend\">
                                            <button class=\"btn btn-primary btn-outline\" id=\"btn-simpan\" type=\"button\"><i class=\"fa fa-save\"></i></button>
                                        </div>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Tanggal Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pembayaran_detail.tanggal_transfer == null) ? '-' : data_pembayaran_detail.tanggal_transfer|date('d-m-Y') }}\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pembayaran_detail.tanggal_transfer == null) ? '-' : data_pembayaran_detail.tanggal_transfer|date('H:i:s') }}\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Bukti</h4>
                                    </label>
                                    {% if (data_pembayaran_detail.bukti == null) %}
                                        - 
                                    {% else %}
                                        <a href=\"#\" onclick=\"viewImage()\">
                                            <img src=\"{{ asset('uploads/bukti/'~data_pembayaran_detail.bukti) }}\" width=\"100\" heigth=\"100\" />
                                        </a>
                                    {% endif %}
                                </div>
                            </div>
                        {% elseif data_pemesanan.metode_pembayaran == 'c' %}
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Transfer</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pembayaran_cod.nama_bayar == null) ? '-' : data_pembayaran_cod.nama_bayar }}\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jumlah Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pembayaran_cod.jumlah_bayar == null) ? '-' : data_pembayaran_cod.jumlah_bayar|format_rp }}\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Tanggal Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pembayaran_cod.tanggal_bayar == null) ? '-' : data_pembayaran_cod.tanggal_bayar|date('d-m-Y') }}\" readonly>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-xs-6\">
                                    <label for=\"username\" class=\"text-dark\">
                                        <h4>Jam Bayar</h4>
                                    </label>
                                    <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ (data_pembayaran_cod.tanggal_bayar == null) ? '-' : data_pembayaran_cod.tanggal_bayar|date('H:i:s') }}\" readonly>
                                </div>
                            </div>
                            {% if data_pemesanan.status_pembayaran == '0' %}
                                 <div class=\"form-group\">
                                     <div class=\"col-xs-12\"><br>
                                        <a class=\"btn btn-lg btn-success btn-sm btn-rounded\" href=\"/admin/pemesanan/bayar/{{ data_pemesanan.kd_pemesanan }}\"><i class=\"fa fa-money\"></i>&nbsp;Bayar</a>
                                     </div>
                                 </div>
                            {% endif %}
                        {% endif %}
                    </form>
                </div>
            </div>
        </div>
    </div>
    {# end:: form #}
    {# begin:: tabel #}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    <div class=\"table-responsive\">
                        <table id=\"tabel_pemesanan\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Gambar</th>
                                    <th>Nama</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% set sum = 0 %}
                                {% for rows in data_pemesanan_detail %}
                                {% set sum = sum + rows.sub_total  %}
                                <tr>
                                    <td>{{ loop.index }} </td>
                                    <td><img src=\"{{ asset('uploads/produk/'~rows.gambar) }}\" width=\"100\" heigth=\"100\" /></td>
                                    <td>{{ rows.nama }}</td>
                                    <td>{{ rows.jumlah }}</td>
                                    <td align=\"center\">{{ rows.harga|format_rp }}</td>
                                    <td align=\"center\"><span id=\"sub-total\">{{ rows.sub_total|format_rp }}</span></td>
                                </tr>
                                {% endfor %}
                                <tr>
                                    <td colspan=\"5\" align=\"center\">
                                        Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">{{ sum|format_rp }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan=\"5\" align=\"center\">
                                        Grand Total
                                    </td>
                                    <td align=\"center\">
                                        <span id=\"total\">{{ sum|format_rp }}</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <a class=\"btn btn-lg btn-danger btn-sm btn-rounded\" href=\"/admin/pemesanan\"><i class=\"fa fa-arrow-left\"></i>&nbsp;Kembali</a>
                    <a class=\"btn btn-lg btn-info btn-sm btn-rounded\" href=\"#\"><i class=\"fa fa-print\"></i>&nbsp;Cetak</a>
                </div>
            </div>
        </div>
    </div>
    {# end:: tabel #}
</div>
{# end:: body #}
{% endblock %}

{% block javascripts %}
<script>
    var untukUbahAkun = function() {
        \$(document).on('click', '#btn-simpan', function(e) {
            e.preventDefault();
            var ini = \$(this);
            var kdPemesanan = \$('#inpkdpemesanan').attr('placeholder');
            var jumlahTransfer = \$('#inpjumlahtransfer').val();

            if (jumlahTransfer === '') {
                \$('#inpjumlahtransfer').attr('required', 'required');
                alert('Jumlah Transfer tidak boleh kosong!');
            } else {
                \$.ajax({
                    method: 'post',
                    url: '/admin/pembayaran_transfer',
                    dataType: 'json',
                    data: {
                        inpkdorder: kdPemesanan,
                        inpjumlahtransfer: jumlahTransfer,
                    },
                    beforeSend: function () {
                        ini.attr('disabled', 'disabled');
                    },
                    success: function (data) {
                        alert(data.msg);
                        location.reload()
                    }
                });
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

    // untuk lihat gambar pada tab baru
    function viewImage(url) {
        window.open(\"{{ asset('uploads/bukti/'~data_pembayaran_detail.bukti) }}\");
    }
</script>
{% endblock %}", "admin/pemesanan/detail.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\pemesanan\\detail.html.twig");
    }
}
