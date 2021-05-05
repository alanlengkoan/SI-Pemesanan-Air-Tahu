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
class __TwigTemplate_842388ee9b58a393434f5a7f75b7f2ee2e7ccd100bfc67703e51e46597b7a2f6 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "home/transfer.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Transfer";
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
        echo twig_escape_filter($this->env, ($context["kd_order"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "nama", [], "any", false, false, false, 35), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <h5>Nomor Rekening</h5>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data_pembayaran_detail"] ?? null), "rekening", [], "any", false, false, false, 41), "html", null, true);
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"col-md-12\">
                            <div class=\"form-group\">
                                <h5>Total</h5>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(($context["total"] ?? null)), "html", null, true);
        echo "\" readonly>
                                <input type=\"hidden\" name=\"inptotal\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
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
    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  163 => 83,  159 => 82,  146 => 71,  121 => 48,  117 => 47,  108 => 41,  99 => 35,  92 => 30,  87 => 27,  83 => 26,  73 => 18,  59 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/transfer.html.twig", "/home/airtahu.online/templates/home/transfer.html.twig");
    }
}
