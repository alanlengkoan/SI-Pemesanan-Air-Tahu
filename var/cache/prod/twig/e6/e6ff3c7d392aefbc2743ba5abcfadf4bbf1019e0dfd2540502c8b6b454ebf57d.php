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

/* admin/laporan_tahunan/view.html.twig */
class __TwigTemplate_1cea3dd7c2c64bd11bb96b6ff2daf696e78914e27f89f8e0e5ed024bb74807eb extends Template
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
        return "admin/layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/laporan_tahunan/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Laporan";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\" rel=\"stylesheet\"/>
";
    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 14
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
        echo "</h2>
        </div>
    </div>
</div>
";
        // line 19
        echo "
";
        // line 21
        echo "<div class=\"container-fluid\">
    ";
        // line 23
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Form</h3>
                    <hr>
                    <form id=\"form-add\" action=\"l_tahunan/lihat\" method=\"post\" enctype=\"multipart/form-data\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("submit"), "html", null, true);
        echo "\">

                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Tahun *</h4>
                            <select style=\"width: 100%\" class=\"form-control form-control-sm\" name=\"inptahun\" id=\"inptahun\">
                                <option value=\"\">- Pilih Tahun -</option>
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tahun"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 37
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["rows"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["rows"], "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                            </select>
                            <div id=\"error\"></div>
                        </div>
                        <button type=\"submit\" id=\"add\" class=\"btn btn-outline-primary btn-sm btn-rounded\">
                            <i class=\"fas fa-eye\"></i>&nbsp;Lihat
                        </button>
                        <button type=\"button\" id=\"print\" class=\"btn btn-outline-primary btn-sm btn-rounded\">
                            <i class=\"fas fa-print\"></i>&nbsp;Cetak
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 54
        echo "    ";
        // line 55
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    ";
        // line 62
        echo "                    <div id=\"lihat-tabel\"></div>
                    ";
        // line 64
        echo "                </div>
            </div>
        </div>
    </div>
    ";
        // line 69
        echo "</div>
";
    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js\"></script>

<script>
    // untuk datepicker
    var untukTanggal = function () {
        \$('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            autoclose: true,
        });
    }();

    // untuk lihat data
    var untukLihatData = function() {
        \$('#form-add').submit(function(e) {
            e.preventDefault();

            \$('#inptahun').attr('required', 'required');

            if (\$('#form-add').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'html',
                    beforeSend: function() {
                        \$('#add').attr('disabled', 'disabled');
                        \$('#add').html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting...');
                    },
                    success: function(response) {
                        \$('#lihat-tabel').html(response);
                        \$('#add').removeAttr('disabled');
                        \$('#add').html('<i class=\"fas fa-eye\"></i>&nbsp;Lihat');
                    }
                })
            }
        });
    }();

    // untuk export laporan
    var untukExport = function () {
        \$(document).on('click', '#print', function () {
            var tahun = \$('#inptahun').val();

            if (tahun == '') {
                return false;
            } else {
                location.replace('l_tahunan/export?tahun=' + btoa(tahun), '_blank');
            }
        });
    }();

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
        return "admin/laporan_tahunan/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 74,  160 => 73,  155 => 69,  149 => 64,  146 => 62,  138 => 55,  136 => 54,  120 => 39,  109 => 37,  105 => 36,  96 => 30,  87 => 23,  84 => 21,  81 => 19,  74 => 14,  69 => 11,  65 => 9,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/laporan_tahunan/view.html.twig", "/home/airtahu.online/templates/admin/laporan_tahunan/view.html.twig");
    }
}
