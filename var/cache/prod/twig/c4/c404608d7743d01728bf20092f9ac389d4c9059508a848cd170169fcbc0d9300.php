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

/* admin/laporan_bulanan/view.html.twig */
class __TwigTemplate_a846df1917292ff4c11c0ad1b2409cac141d3c0b71ded8312fd8099b372e7ef9 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/laporan_bulanan/view.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/laporan_bulanan/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Laporan";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\" rel=\"stylesheet\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 14, $this->source); })()), "html", null, true);
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
                    <form id=\"form-add\" action=\"l_bulanan/lihat\" method=\"post\" enctype=\"multipart/form-data\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("submit"), "html", null, true);
        echo "\">

                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Bulan *</h4>
                            <select style=\"width: 100%\" class=\"form-control form-control-sm\" name=\"inpbulan\" id=\"inpbulan\">
                                <option value=\"\">- Pilih Bulan -</option>
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bulan"]) || array_key_exists("bulan", $context) ? $context["bulan"] : (function () { throw new RuntimeError('Variable "bulan" does not exist.', 36, $this->source); })()));
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
            // line 37
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["rows"], "html", null, true);
            echo "</option>
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

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

            \$('#inpbulan').attr('required', 'required');

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
            var bulan = \$('#inpbulan').val();

            if (bulan == '') {
                return false;
            } else {
                location.replace('l_bulanan/export?bulan=' + btoa(bulan), '_blank');
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/laporan_bulanan/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 74,  205 => 73,  197 => 69,  191 => 64,  188 => 62,  180 => 55,  178 => 54,  162 => 39,  143 => 37,  126 => 36,  117 => 30,  108 => 23,  105 => 21,  102 => 19,  95 => 14,  90 => 11,  83 => 9,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout_admin.html.twig' %}

{% block title %}Laporan{% endblock %}

{% block stylesheets %}
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css\" rel=\"stylesheet\"/>
{% endblock %}

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
                    <form id=\"form-add\" action=\"l_bulanan/lihat\" method=\"post\" enctype=\"multipart/form-data\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('submit') }}\">

                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Bulan *</h4>
                            <select style=\"width: 100%\" class=\"form-control form-control-sm\" name=\"inpbulan\" id=\"inpbulan\">
                                <option value=\"\">- Pilih Bulan -</option>
                                {% for rows in bulan %}
                                    <option value=\"{{ loop.index }}\">{{ rows }}</option>
                                {% endfor %}
                            </select>
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
    {# end:: form #}
    {# begin:: tabel #}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    {# begin:: tabel #}
                    <div id=\"lihat-tabel\"></div>
                    {# end:: tabel #}
                </div>
            </div>
        </div>
    </div>
    {# end:: tabel #}
</div>
{# end:: body #}
{% endblock %}

{% block javascripts %}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>
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

            \$('#inpbulan').attr('required', 'required');

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
            var bulan = \$('#inpbulan').val();

            if (bulan == '') {
                return false;
            } else {
                location.replace('l_bulanan/export?bulan=' + btoa(bulan), '_blank');
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
{% endblock %}", "admin/laporan_bulanan/view.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\laporan_bulanan\\view.html.twig");
    }
}
