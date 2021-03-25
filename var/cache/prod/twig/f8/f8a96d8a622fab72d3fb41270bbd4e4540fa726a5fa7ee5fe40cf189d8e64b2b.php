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

/* home/register.html.twig */
class __TwigTemplate_6b1b0e4675d8f37f6a5f9b925cac75f532073d1d5ac40138aaf606221066eefa extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</title>

    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"";
        // line 11
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
                            <div class=\"\"></div>
                            <div class=\"col-lg-12\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h1 class=\"h4 text-gray-900 mb-4\">Buat Akun!</h1>
                                    </div>
                                    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "session", [], "any", false, false, false, 27), "flashbag", [], "any", false, false, false, 27), "get", [0 => "error"], "method", false, false, false, 27)) {
            // line 28
            echo "                                    <div class=\"alert alert-warning alert-dismissible bg-warning text-white border-0 fade show\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                        Username yang Anda masukkan sudah terdaftar!
                                    </div>
                                    ";
        }
        // line 35
        echo "                                    
                                    <form class=\"user\" action=\"register/add\" method=\"post\">

                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control form-control-user\" name=\"inpnama\" id=\"inpnama\" placeholder=\"Nama\" required=\"required\" />
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control form-control-user\" name=\"inpemail\" id=\"inpemail\" placeholder=\"Email\" required=\"required\" />
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control form-control-user\" name=\"inpusername\" id=\"inpusername\" placeholder=\"Username\" required=\"required\" />
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\" name=\"inppassword\" id=\"inppassword\" placeholder=\"Password\" required=\"required\" />
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">Daftar</button>
                                        <a href=\"/\" class=\"btn btn-danger btn-user btn-block\">Batal</a>
                                        <hr>
                                    </form>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_user");
        echo "\">Sudah punya akun? Masuk!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 57,  90 => 38,  85 => 35,  76 => 28,  74 => 27,  55 => 11,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{{ halaman }}</title>

    <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/user/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
</head>

<body class=\"bg-gradient-primary\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-6 col-lg-6 col-md-6\">
                <div class=\"card o-hidden border-0 shadow-lg my-5\">
                    <div class=\"card-body p-0\">
                        <div class=\"row\">
                            <div class=\"\"></div>
                            <div class=\"col-lg-12\">
                                <div class=\"p-5\">
                                    <div class=\"text-center\">
                                        <h1 class=\"h4 text-gray-900 mb-4\">Buat Akun!</h1>
                                    </div>
                                    {% if app.session.flashbag.get('error') %}
                                    <div class=\"alert alert-warning alert-dismissible bg-warning text-white border-0 fade show\" role=\"alert\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                            <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                        Username yang Anda masukkan sudah terdaftar!
                                    </div>
                                    {% endif %}
                                    
                                    <form class=\"user\" action=\"register/add\" method=\"post\">

                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control form-control-user\" name=\"inpnama\" id=\"inpnama\" placeholder=\"Nama\" required=\"required\" />
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"email\" class=\"form-control form-control-user\" name=\"inpemail\" id=\"inpemail\" placeholder=\"Email\" required=\"required\" />
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"text\" class=\"form-control form-control-user\" name=\"inpusername\" id=\"inpusername\" placeholder=\"Username\" required=\"required\" />
                                        </div>
                                        <div class=\"form-group\">
                                            <input type=\"password\" class=\"form-control form-control-user\" name=\"inppassword\" id=\"inppassword\" placeholder=\"Password\" required=\"required\" />
                                        </div>
                                        <button type=\"submit\" class=\"btn btn-primary btn-user btn-block\">Daftar</button>
                                        <a href=\"/\" class=\"btn btn-danger btn-user btn-block\">Batal</a>
                                        <hr>
                                    </form>
                                    <div class=\"text-center\">
                                        <a class=\"small\" href=\"{{ path('login_user') }}\">Sudah punya akun? Masuk!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>", "home/register.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\home\\register.html.twig");
    }
}
