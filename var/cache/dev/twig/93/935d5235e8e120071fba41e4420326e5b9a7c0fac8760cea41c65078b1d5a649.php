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

/* admin/pemesanan/bayar.html.twig */
class __TwigTemplate_25a7707d3f1a51ab5e92f99e11b2d5c4b482e9df43f8f30c3923b770e99704c9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pemesanan/bayar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pemesanan/bayar.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/pemesanan/bayar.html.twig", 1);
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

        echo "Bayar";
        
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
                    <h3 class=\"card-title\">Form</h3>
                    <hr>
                    <p><i>Note :</i> Silahkan bayar sesuai dengan total yang tertera!</p>
                    <form id=\"form-add\" action=\"/admin/pembayaran\" method=\"post\">
                        
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("submit"), "html", null, true);
        echo "\">
                        <input type=\"hidden\" name=\"inpkkorder\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["kd_order"]) || array_key_exists("kd_order", $context) ? $context["kd_order"] : (function () { throw new RuntimeError('Variable "kd_order" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" />

                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Kode Order</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["kd_order"]) || array_key_exists("kd_order", $context) ? $context["kd_order"] : (function () { throw new RuntimeError('Variable "kd_order" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Total</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 44, $this->source); })())), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Nama *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpnamabayar\" id=\"inpnamabayar\" placeholder=\"Masukkan Nama Penyetor\" />
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Jumlah Bayar *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpjumlahbayar\" id=\"inpjumlahbayar\" onkeydown=\"return justAngka(event)\" onkeyup=\"javascript:this.value=autoSeparator(this.value);\" placeholder=\"Masukkan Jumlah Bayar\" />
                            <div id=\"error\"></div>
                        </div>
                        <button type=\"submit\" id=\"add\" class=\"btn btn-outline-primary btn-sm btn-rounded\">
                            <i class=\"fas fa-plus\"></i>&nbsp;Proses
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 65
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
    // untuk tambah data
    var untukTambahData = function () {
        \$('#form-add').submit(function (e) {
            e.preventDefault();

            \$('#inpnamabayar').attr('required', 'required');
            \$('#inpjumlahbayar').attr('required', 'required');

            if (\$('#form-add').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function () {
                        \$('#add').attr('disabled', 'disabled');
                        \$('#add').html('Waiting...');
                    },
                    success: function (data) {
                        alert(data.msg);
                        history.go(-1);
                    }
                })
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
        return "admin/pemesanan/bayar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 70,  177 => 69,  166 => 65,  143 => 44,  132 => 36,  122 => 29,  118 => 28,  107 => 19,  104 => 17,  101 => 15,  94 => 10,  89 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout_admin.html.twig' %}

{% block title %}Bayar{% endblock %}

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
                    <h3 class=\"card-title\">Form</h3>
                    <hr>
                    <p><i>Note :</i> Silahkan bayar sesuai dengan total yang tertera!</p>
                    <form id=\"form-add\" action=\"/admin/pembayaran\" method=\"post\">
                        
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('submit') }}\">
                        <input type=\"hidden\" name=\"inpkkorder\" value=\"{{ kd_order }}\" />

                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Kode Order</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ kd_order }}\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Total</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ total|format_rp }}\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Nama *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpnamabayar\" id=\"inpnamabayar\" placeholder=\"Masukkan Nama Penyetor\" />
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Jumlah Bayar *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpjumlahbayar\" id=\"inpjumlahbayar\" onkeydown=\"return justAngka(event)\" onkeyup=\"javascript:this.value=autoSeparator(this.value);\" placeholder=\"Masukkan Jumlah Bayar\" />
                            <div id=\"error\"></div>
                        </div>
                        <button type=\"submit\" id=\"add\" class=\"btn btn-outline-primary btn-sm btn-rounded\">
                            <i class=\"fas fa-plus\"></i>&nbsp;Proses
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {# end:: form #}
</div>
{# end:: body #}
{% endblock %}

{% block javascripts %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
    // untuk tambah data
    var untukTambahData = function () {
        \$('#form-add').submit(function (e) {
            e.preventDefault();

            \$('#inpnamabayar').attr('required', 'required');
            \$('#inpjumlahbayar').attr('required', 'required');

            if (\$('#form-add').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function () {
                        \$('#add').attr('disabled', 'disabled');
                        \$('#add').html('Waiting...');
                    },
                    success: function (data) {
                        alert(data.msg);
                        history.go(-1);
                    }
                })
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
{% endblock %}", "admin/pemesanan/bayar.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\pemesanan\\bayar.html.twig");
    }
}
