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

/* home/transfer.html.twig */
class __TwigTemplate_470ee69ad3f4af8e5e25822c630d8931bbf52bd67a94d8630cecc7199acd956b extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/transfer.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/transfer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Transfer";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
                <h2 class=\"mb-0 bread\">Transfer</h2>
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
            <div class=\"col-xl-8 ftco-animate\">
                <p><i>Note :</i> Silahkan transfer sesuai dengan total yang tertera!</p>

                <form class=\"billing-form\" id=\"form-add\" action=\"/user/pembayaran\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("submit"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" id=\"inpkkorder\" name=\"inpkkorder\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["kd_order"]) || array_key_exists("kd_order", $context) ? $context["kd_order"] : (function () { throw new RuntimeError('Variable "kd_order" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" />

                    ";
        // line 30
        echo "                    <h3 class=\"mb-4 billing-heading\">Detail Pembayaran</h3>
                    <div class=\"row align-items-end\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <h5>Bank</h5>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 35, $this->source); })()), "nama", [], "any", false, false, false, 35), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <h5>Nomor Rekening</h5>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data_pembayaran_detail"]) || array_key_exists("data_pembayaran_detail", $context) ? $context["data_pembayaran_detail"] : (function () { throw new RuntimeError('Variable "data_pembayaran_detail" does not exist.', 41, $this->source); })()), "rekening", [], "any", false, false, false, 41), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <h5>Total</h5>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 47, $this->source); })())), "html", null, true);
        echo "\" readonly>
                                <input type=\"hidden\" name=\"inptotal\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpnamapenyetor\">Nama Penyetor</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpnamapenyetor\" id=\"inpnamapenyetor\" />
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpatasnama\">Atas Nama</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpatasnama\" id=\"inpatasnama\" />
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpbukti\">Bukti Pembayaran</label>
                                <input type=\"file\" class=\"form-control\" name=\"inpbukti\" id=\"inpbukti\" />
                            </div>
                        </div>
                    </div>
                    ";
        // line 71
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

    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
    // untuk tambah data
    var untukTambahData = function () {
        \$('#form-add').submit(function (e) {
            e.preventDefault();

            \$('#inpnamapenyetor').attr('required', 'required');
            \$('#inpatasnama').attr('required', 'required');
            \$('#inpbukti').attr('required', 'required');

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
                        window.location = '/user/nota/'+\$('#inpkkorder').val();
                    }
                })
            }
        });
    }();
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/transfer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 83,  177 => 82,  161 => 71,  136 => 48,  132 => 47,  123 => 41,  114 => 35,  107 => 30,  102 => 27,  98 => 26,  88 => 18,  74 => 7,  67 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Transfer{% endblock %}

{% block body %}
{# begin:: background #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/user/images/tahu.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">Transfer</h2>
            </div>
        </div>
    </div>
</section>
{# end:: background #}

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-8 ftco-animate\">
                <p><i>Note :</i> Silahkan transfer sesuai dengan total yang tertera!</p>

                <form class=\"billing-form\" id=\"form-add\" action=\"/user/pembayaran\" method=\"post\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('submit') }}\">
                    <input type=\"hidden\" id=\"inpkkorder\" name=\"inpkkorder\" value=\"{{ kd_order }}\" />

                    {# begin:: form #}
                    <h3 class=\"mb-4 billing-heading\">Detail Pembayaran</h3>
                    <div class=\"row align-items-end\">
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <h5>Bank</h5>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pembayaran_detail.nama }}\" readonly>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <h5>Nomor Rekening</h5>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ data_pembayaran_detail.rekening }}\" readonly>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <h5>Total</h5>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"{{ total|format_rp }}\" readonly>
                                <input type=\"hidden\" name=\"inptotal\" value=\"{{ total }}\">
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpnamapenyetor\">Nama Penyetor</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpnamapenyetor\" id=\"inpnamapenyetor\" />
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpatasnama\">Atas Nama</label>
                                <input type=\"text\" class=\"form-control\" name=\"inpatasnama\" id=\"inpatasnama\" />
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <label for=\"inpbukti\">Bukti Pembayaran</label>
                                <input type=\"file\" class=\"form-control\" name=\"inpbukti\" id=\"inpbukti\" />
                            </div>
                        </div>
                    </div>
                    {# end:: form #}

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
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>

<script>
    // untuk tambah data
    var untukTambahData = function () {
        \$('#form-add').submit(function (e) {
            e.preventDefault();

            \$('#inpnamapenyetor').attr('required', 'required');
            \$('#inpatasnama').attr('required', 'required');
            \$('#inpbukti').attr('required', 'required');

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
                        window.location = '/user/nota/'+\$('#inpkkorder').val();
                    }
                })
            }
        });
    }();
</script>
{% endblock %}", "home/transfer.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\transfer.html.twig");
    }
}
