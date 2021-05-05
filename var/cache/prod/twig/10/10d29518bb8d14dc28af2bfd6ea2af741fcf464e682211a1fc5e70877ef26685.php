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

/* admin/pemesanan/ulasan.html.twig */
class __TwigTemplate_b65d4ca953cfae837f65928b13ddf6ae21482ca535f1eb70caaef2be39fb8844 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/pemesanan/ulasan.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Detail Pemesanan";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 10
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
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
                    <h3 class=\"card-title\">Ulasan</h3>
                    <hr>
                    <form class=\"form\" action=\"##\" method=\"post\" id=\"registrationForm\">
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Bintang</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 31
        (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["pemesanan"] ?? null), "bintang", [], "any", false, false, false, 31), ""))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pemesanan"] ?? null), "bintang", [], "any", false, false, false, 31), "html", null, true))));
        echo "\" readonly>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-xs-6\">
                                <label for=\"username\" class=\"text-dark\">
                                    <h4>Komentar</h4>
                                </label>
                                <input type=\"text\" class=\"form-control-plaintext\" placeholder=\"";
        // line 39
        (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["pemesanan"] ?? null), "komentar", [], "any", false, false, false, 39), ""))) ? (print ("-")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pemesanan"] ?? null), "komentar", [], "any", false, false, false, 39), "html", null, true))));
        echo "\" readonly>
                            </div>
                        </div>
                    </form>
                    <br>
                    <a class=\"btn btn-lg btn-danger btn-sm btn-rounded\" href=\"/admin/pemesanan\"><i class=\"fa fa-arrow-left\"></i>&nbsp;Kembali</a>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 50
        echo "</div>
";
    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "admin/pemesanan/ulasan.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 54,  115 => 50,  102 => 39,  91 => 31,  77 => 19,  74 => 17,  71 => 15,  64 => 10,  59 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/pemesanan/ulasan.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\pemesanan\\ulasan.html.twig");
    }
}
