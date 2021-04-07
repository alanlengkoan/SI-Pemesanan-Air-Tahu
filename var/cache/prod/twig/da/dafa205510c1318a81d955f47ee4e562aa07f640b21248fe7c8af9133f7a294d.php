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

/* kurir/dashboard/view.html.twig */
class __TwigTemplate_c791f3eefea444b2f0a5f3c27dcfe957da2a48a80ba725a35438671749196b79 extends Template
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
        return "kurir/layout_kurir.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("kurir/layout_kurir.html.twig", "kurir/dashboard/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dashboard";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h3 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">Selamat Datang ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9), "nama", [], "any", false, false, false, 9), "html", null, true);
        echo "!</h3>
            <div class=\"d-flex align-items-center\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb m-0 p-0\">
                        <li class=\"breadcrumb-item\">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid\">
    <div class=\"card-group\">
        <div class=\"card border-right\">
            <div class=\"card-body\">
                <div class=\"d-flex d-lg-flex d-md-block align-items-center\">
                    <div>
                        <div class=\"d-inline-flex align-items-center\">
                            <h2 class=\"text-dark mb-1 font-weight-medium\">236</h2>
                        </div>
                    </div>
                    <div class=\"ml-auto mt-md-3 mt-lg-0\">
                        <span class=\"opacity-7 text-muted\"><i data-feather=\"user-plus\"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card border-right\">
            <div class=\"card-body\">
                <div class=\"d-flex d-lg-flex d-md-block align-items-center\">
                    <div>
                        <h2 class=\"text-dark mb-1 w-100 text-truncate font-weight-medium\">18,306</h2>
                    </div>
                    <div class=\"ml-auto mt-md-3 mt-lg-0\">
                        <span class=\"opacity-7 text-muted\"><i data-feather=\"dollar-sign\"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card border-right\">
            <div class=\"card-body\">
                <div class=\"d-flex d-lg-flex d-md-block align-items-center\">
                    <div>
                        <div class=\"d-inline-flex align-items-center\">
                            <h2 class=\"text-dark mb-1 font-weight-medium\">1538</h2>
                        </div>
                    </div>
                    <div class=\"ml-auto mt-md-3 mt-lg-0\">
                        <span class=\"opacity-7 text-muted\"><i data-feather=\"file-plus\"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card\">
            <div class=\"card-body\">
                <div class=\"d-flex d-lg-flex d-md-block align-items-center\">
                    <div>
                        <h2 class=\"text-dark mb-1 font-weight-medium\">864</h2>
                    </div>
                    <div class=\"ml-auto mt-md-3 mt-lg-0\">
                        <span class=\"opacity-7 text-muted\"><i data-feather=\"globe\"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "kurir/dashboard/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kurir/dashboard/view.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\kurir\\dashboard\\view.html.twig");
    }
}
