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

/* home/login.html.twig */
class __TwigTemplate_8fcaf8a65a4fb0ae0b20a07f800762cf0481a9a5cca32295afb41c2346e8ee3e extends Template
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

    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>

<body class=\"bg-gradient-primary\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-6 col-lg-6 col-md-6\">
                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h1 class=\"h4 text-gray-900 mb-4\">Selamat Datang!</h1>
                                    </div>
                                    ";
        // line 28
        if (($context["error"] ?? null)) {
            // line 29
            echo "                                    <div class=\"alert alert-danger alert-dismissible bg-danger text-white border-0 fade show\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                        ";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 33), "security"), "html", null, true);
            echo "
                                    </div>
                                    ";
        }
        // line 36
        echo "
                                    ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 37)) {
            // line 38
            echo "                                    <div class=\"alert alert-warning alert-dismissible bg-warning text-white border-0 fade show\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                        You are logged in as <strong>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
            echo "</strong>, <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                                    </div>
                                    ";
        }
        // line 45
        echo "
                                    <form class=\"user\" action=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_user");
        echo "\" method=\"post\">

                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control form-control-user\" name=\"_username\" id=\"username\" placeholder=\"Username\" required=\"required\" />
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\" name=\"_password\" id=\"password\" placeholder=\"Password\" required=\"required\" />
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">Masuk</button>
                                        <a href=\"/\" class=\"btn btn-danger btn-user btn-block\">Batal</a>
                                        <hr>
                                    </form>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Buat Akun!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "home/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 73,  143 => 72,  129 => 61,  113 => 48,  108 => 46,  105 => 45,  97 => 42,  91 => 38,  89 => 37,  86 => 36,  80 => 33,  74 => 29,  72 => 28,  54 => 13,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/login.html.twig", "/home/airtahu.online/templates/home/login.html.twig");
    }
}
