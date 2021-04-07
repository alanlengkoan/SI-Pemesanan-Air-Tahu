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
class __TwigTemplate_1524f36899b8e543af9434afaf5a977f03a5214b35db0ec41f5f9146c5bee210 extends Template
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
        $this->parent = $this->loadTemplate("layout.html.twig", "home/riwayat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Riwayat";
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
                <h2 class=\"mb-0 bread\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
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
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pemesanan"] ?? null));
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
            echo "                        <tr>
                            <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40), "html", null, true);
            echo " </td>
                            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_pemesanan", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tgl_pemesanan", [], "any", false, false, false, 43), "d-m-Y"), "html", null, true);
            echo "</td>
                            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "tgl_pemesanan", [], "any", false, false, false, 44), "H:m:s"), "html", null, true);
            echo "</td>
                            <td>";
            // line 45
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "metode_pembayaran", [], "any", false, false, false, 45), "c"))) ? ("COD") : ("Transfer"));
            echo "</td>
                            <td>
                                ";
            // line 47
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "status_pembayaran", [], "any", false, false, false, 47), 0))) {
                // line 48
                echo "                                Menunggu Pembayaran
                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 49
$context["rows"], "status_pembayaran", [], "any", false, false, false, 49), 1))) {
                // line 50
                echo "                                Telah Melakukan Pembayaran
                                ";
            } else {
                // line 52
                echo "                                -
                                ";
            }
            // line 54
            echo "                            </td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "total", [], "any", false, false, false, 55)), "html", null, true);
            echo "</>
                            <td>
                                <a href=\"nota/";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_pemesanan", [], "any", false, false, false, 57), "html", null, true);
            echo "\"><span aria-hidden=\"true\"><i class=\"fa fa-info\"></i></span></a>
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
        // line 61
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
";
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
        return array (  183 => 61,  165 => 57,  160 => 55,  157 => 54,  153 => 52,  149 => 50,  147 => 49,  144 => 48,  142 => 47,  137 => 45,  133 => 44,  129 => 43,  125 => 42,  121 => 41,  117 => 40,  114 => 39,  97 => 38,  75 => 18,  67 => 12,  58 => 7,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/riwayat.html.twig", "/home/airtahu.online/templates/home/riwayat.html.twig");
    }
}
