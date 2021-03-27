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

/* home/riwayat.html.twig */
class __TwigTemplate_c1c2327067fcc6a3e4e82ac15c3f0180e95b991dcfcc9698e559fbfa064073b5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/riwayat.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/riwayat.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "home/riwayat.html.twig", 1);
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

        echo "Riwayat";
        
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
                <h2 class=\"mb-0 bread\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h2>
            </div>
        </div>
    </div>
</section>
";
        // line 18
        echo "
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"table-wrap\">
                <table class=\"table\">
                    <thead class=\"thead-primary\">
                        <tr>
                            <th>No.</th>
                            <th>Kode Order</th>
                            <th>Nama</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Jam Pemesanan</th>
                            <th>Metode Pembayaran</th>
                            <th>Status Pembayaran</th>
                            <th>Status Pengantaran</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 39
        $context["status_pengantaran"] = [0 => "Dikemas", 1 => "Dikirim", 2 => "Diterima"];
        // line 40
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pemesanan"]) || array_key_exists("pemesanan", $context) ? $context["pemesanan"] : (function () { throw new RuntimeError('Variable "pemesanan" does not exist.', 40, $this->source); })()));
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
            // line 41
            echo "                        <tr>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42), "html", null, true);
            echo " </td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_pemesanan", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tgl_pemesanan", [], "any", false, false, false, 45), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tgl_pemesanan", [], "any", false, false, false, 46), "H:m:s"), "html", null, true);
            echo "</td>
                            <td>";
            // line 47
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "metode_pembayaran", [], "any", false, false, false, 47), "c"))) ? ("COD") : ("Transfer"));
            echo "</td>
                            <td>
                                ";
            // line 49
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "status_pembayaran", [], "any", false, false, false, 49), 0))) {
                // line 50
                echo "                                Menunggu Pembayaran
                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 51
$context["rows"], "status_pembayaran", [], "any", false, false, false, 51), 1))) {
                // line 52
                echo "                                Telah Melakukan Pembayaran
                                ";
            } else {
                // line 54
                echo "                                -
                                ";
            }
            // line 56
            echo "                            </td>
                            <td>
                                <a href=\"tracking/";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_pemesanan", [], "any", false, false, false, 58), "html", null, true);
            echo "\"><span aria-hidden=\"true\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status_pengantaran"]) || array_key_exists("status_pengantaran", $context) ? $context["status_pengantaran"] : (function () { throw new RuntimeError('Variable "status_pengantaran" does not exist.', 58, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["rows"], "status_pengantaran", [], "any", false, false, false, 58), [], "array", false, false, false, 58), "html", null, true);
            echo "</span></a>
                            </td>
                            <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "total", [], "any", false, false, false, 60)), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"nota/";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_pemesanan", [], "any", false, false, false, 62), "html", null, true);
            echo "\"><span aria-hidden=\"true\"><i class=\"fa fa-motorcycle\"></i></span></a>
                            </td>
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
        // line 66
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/riwayat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 66,  207 => 62,  202 => 60,  195 => 58,  191 => 56,  187 => 54,  183 => 52,  181 => 51,  178 => 50,  176 => 49,  171 => 47,  167 => 46,  163 => 45,  159 => 44,  155 => 43,  151 => 42,  148 => 41,  130 => 40,  128 => 39,  105 => 18,  97 => 12,  88 => 7,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}

{% block title %}Riwayat{% endblock %}

{% block body %}
{# begin:: background #}
<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('{{ asset('assets/user/images/tahu.jpg') }}');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">{{ halaman }}</h2>
            </div>
        </div>
    </div>
</section>
{# end:: background #}

<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"table-wrap\">
                <table class=\"table\">
                    <thead class=\"thead-primary\">
                        <tr>
                            <th>No.</th>
                            <th>Kode Order</th>
                            <th>Nama</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Jam Pemesanan</th>
                            <th>Metode Pembayaran</th>
                            <th>Status Pembayaran</th>
                            <th>Status Pengantaran</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% set status_pengantaran = ['Dikemas', 'Dikirim', 'Diterima'] %}
                        {% for rows in pemesanan %}
                        <tr>
                            <td>{{ loop.index }} </td>
                            <td>{{ rows.kd_pemesanan }}</td>
                            <td>{{ rows.nama }}</td>
                            <td>{{ rows.tgl_pemesanan|date('d-m-Y') }}</td>
                            <td>{{ rows.tgl_pemesanan|date('H:m:s') }}</td>
                            <td>{{ (rows.metode_pembayaran == 'c') ? 'COD' : 'Transfer' }}</td>
                            <td>
                                {% if rows.status_pembayaran == 0 %}
                                Menunggu Pembayaran
                                {% elseif rows.status_pembayaran == 1 %}
                                Telah Melakukan Pembayaran
                                {% else %}
                                -
                                {% endif %}
                            </td>
                            <td>
                                <a href=\"tracking/{{ rows.kd_pemesanan }}\"><span aria-hidden=\"true\">{{ status_pengantaran[rows.status_pengantaran] }}</span></a>
                            </td>
                            <td>{{ rows.total|format_rp }}</td>
                            <td>
                                <a href=\"nota/{{ rows.kd_pemesanan }}\"><span aria-hidden=\"true\"><i class=\"fa fa-motorcycle\"></i></span></a>
                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
{% endblock %}", "home/riwayat.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\riwayat.html.twig");
    }
}
