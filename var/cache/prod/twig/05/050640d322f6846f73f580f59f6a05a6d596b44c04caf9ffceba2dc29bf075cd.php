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

/* kurir/login.html.twig */
class __TwigTemplate_933ef369ef31e1aed7be810948ead688e21be705d6364462130d95b2da216d98 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <title>";
        // line 10
        echo twig_escape_filter($this->env, ($context["halaman"] ?? null), "html", null, true);
        echo "</title>

    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body>

    <div class=\"container form-login\">
        <div class=\"row justify-content-center pt-5 pb-5\">
            <div class=\"col-sm-4 col-md-4 col-lg-4\">
                <form method=\"post\" action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_kurir");
        echo "\">
                    <div class=\"card\">
                        <div class=\"card-header text-center\">
                            <h2>Silahkan Masuk</h2>
                        </div>
                        <div class=\"card-block\">
                            ";
        // line 30
        if (($context["error"] ?? null)) {
            // line 31
            echo "                            <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                                <strong>Gagal!</strong> ";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 32), "security"), "html", null, true);
            echo "
                            </div>
                            ";
        }
        // line 35
        echo "
                            ";
        // line 36
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 36)) {
            // line 37
            echo "                            <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
                                You are logged in as <strong>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38), "username", [], "any", false, false, false, 38), "html", null, true);
            echo "</strong>, <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                            </div>
                            ";
        }
        // line 41
        echo "
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                                    <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"Username\" required=\"required\" />
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-addon\"><i class=\"fa fa-key\"></i></span>
                                    <input type=\"password\" name=\"_password\" class=\"form-control\"
                                        placeholder=\"Password\" required=\"required\" />
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-success btn-md btn-block\">Masuk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "kurir/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  139 => 65,  113 => 42,  110 => 41,  102 => 38,  99 => 37,  97 => 36,  94 => 35,  88 => 32,  85 => 31,  83 => 30,  74 => 24,  63 => 16,  59 => 15,  55 => 14,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "kurir/login.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\kurir\\login.html.twig");
    }
}
