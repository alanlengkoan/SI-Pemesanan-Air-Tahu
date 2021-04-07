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

/* home/profil.html.twig */
class __TwigTemplate_2bedf3d412e9eebcaa2daf29a458fac39ae6030ab3599a95fea221d46b55897b extends Template
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
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "home/profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Profil";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<section class=\"hero-wrap hero-wrap-2\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/user/images/tahu.jpg"), "html", null, true);
        echo "');\" data-stellar-background-ratio=\"0.5\">
    <div class=\"overlay\"></div>
    <div class=\"container\">
        <div class=\"row no-gutters slider-text align-items-end justify-content-center\">
            <div class=\"col-md-9 ftco-animate mb-5 text-center\">
                <h2 class=\"mb-0 bread\">Profil</h2>
            </div>
        </div>
    </div>
</section>
";
        // line 20
        echo "
<section class=\"ftco-section\">
    <div class=\"container\">
        <div class=\"row my-2\">
            <div class=\"col-lg-12 order-lg-2\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\">
                        <a href=\"\" data-target=\"#foto\" data-toggle=\"tab\" class=\"nav-link active\">Foto</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"\" data-target=\"#akun\" data-toggle=\"tab\" class=\"nav-link\">Akun</a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"\" data-target=\"#keamanan\" data-toggle=\"tab\" class=\"nav-link\">Keamanan</a>
                    </li>
                </ul>
                <div class=\"tab-content py-4\">
                    <div class=\"tab-pane active\" id=\"foto\">
                        <form role=\"form\" action=\"/profil/upd_foto\" id=\"form-foto\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">

                            <div class=\"order-lg-1 text-center\">
                                ";
        // line 42
        $context["fotoProfil"] = ("uploads/profil/" . twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "foto", [], "any", false, false, false, 42));
        // line 43
        echo "                                <img src=\"";
        (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "foto", [], "any", false, false, false, 43), null))) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["fotoProfil"] ?? null)), "html", null, true))) : (print ("//placehold.it/150")));
        echo "\" class=\"mx-auto img-fluid d-block\" id=\"lihat-gambar\" alt=\"Profil\" width=\"200\" />
                                <h6 class=\"mt-2\">Upload a different photo</h6>
                                <label class=\"custom-file\">
                                    <input type=\"file\" id=\"inpfotoprofil\" name=\"inpfotoprofil\" class=\"custom-file-input\">
                                    <span class=\"custom-file-control\">Choose file</span>
                                </label>

                                <button type=\"submit\" id=\"add\" class=\"btn btn-primary btn-sm btn-rounded\">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class=\"tab-pane\" id=\"akun\">
                        <form role=\"form\" action=\"/profil/upd_akun\" id=\"form-akun\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">

                            <div class=\"form-group row\">
                                <label class=\"col-lg-3 col-form-label form-control-label\">Nama</label>
                                <div class=\"col-lg-9\">
                                    <input class=\"form-control\" type=\"text\" name=\"inpnama\" id=\"inpnama\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "nama", [], "any", false, false, false, 64), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-lg-3 col-form-label form-control-label\">Email</label>
                                <div class=\"col-lg-9\">
                                    <input class=\"form-control\" type=\"email\" name=\"inpemail\" id=\"inpemail\"
                                        value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email", [], "any", false, false, false, 71), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-lg-3 col-form-label form-control-label\">Username</label>
                                <div class=\"col-lg-9\">
                                    <input class=\"form-control\" type=\"text\" name=\"inpusername\" id=\"inpusername\"
                                        value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "username", [], "any", false, false, false, 78), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-lg-3 col-form-label form-control-label\"></label>
                                <div class=\"col-lg-9\">
                                    <button type=\"submit\" id=\"add-akun\" class=\"btn btn-primary btn-sm btn-rounded\">
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class=\"tab-pane\" id=\"keamanan\">
                       <form role=\"form\" action=\"/profil/upd_keamanan\" id=\"form-keamanan\" method=\"post\">
                           <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add"), "html", null, true);
        echo "\">

                           <div class=\"form-group row\">
                               <label class=\"col-lg-3 col-form-label form-control-label\">Password Lama</label>
                               <div class=\"col-lg-9\">
                                   <input class=\"form-control\" type=\"password\" name=\"inppasswordlama\"
                                       id=\"inppasswordlama\" placeholder=\"Masukkan password lama Anda\">
                               </div>
                           </div>
                           <div class=\"form-group row\">
                               <label class=\"col-lg-3 col-form-label form-control-label\">Password Baru</label>
                               <div class=\"col-lg-9\">
                                   <input class=\"form-control\" type=\"password\" name=\"inppasswordbaru\"
                                       id=\"inppasswordbaru\" placeholder=\"Masukkan password baru Anda\">
                               </div>
                           </div>
                           <div class=\"form-group row\">
                               <label class=\"col-lg-3 col-form-label form-control-label\">Ulangi Password
                                   Baru</label>
                               <div class=\"col-lg-9\">
                                   <input class=\"form-control\" type=\"password\" name=\"inpkonfirmasipassword\"
                                       id=\"inpkonfirmasipassword\" placeholder=\"Konfirmasi password baru\">
                               </div>
                           </div>
                           <div class=\"form-group row\">
                               <label class=\"col-lg-3 col-form-label form-control-label\"></label>
                               <div class=\"col-lg-9\">
                                   <button type=\"submit\" id=\"add-keamanan\" class=\"btn btn-primary btn-sm btn-rounded\">
                                       Simpan
                                   </button>
                               </div>
                           </div>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
";
    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>
<script>
    // untuk upload foto
    var untukUploadFoto = function () {
        \$(\"#inpfotoprofil\").change(function () {
            cekLokasiFoto(this);
        });
    }();

    // untuk ubah foto
    var untukUbahFoto = function() {
        \$('#form-foto').submit(function(e) {
            e.preventDefault();

            \$('#inpfotoprofil').attr('required', 'required');

            if (\$('#form-foto').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add-foto').attr('disabled', 'disabled');
                        \$('#add-foto').html('Waiting');
                    },
                    success: function(data) {
                        alert(data.msg);
                        location.reload();
                    }
                })
            }
        });
    }();

    // untuk ubah data
    var untukUbahAkun = function() {
        \$('#form-akun').submit(function(e) {
            e.preventDefault();

            \$('#inpnama').attr('required', 'required');
            \$('#inpemail').attr('required', 'required');
            \$('#inpusername').attr('required', 'required');

            if (\$('#form-akun').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add-akun').attr('disabled', 'disabled');
                        \$('#add-akun').html('Waiting');
                    },
                    success: function(data) {
                        alert(data.msg);
                        location.reload();
                    }
                })
            }
        });
    }();
    
    // untuk ubah keamanan
    var untukUbahKeamanan = function() {
        \$('#form-keamanan').submit(function(e) {
            e.preventDefault();

            \$('#inppasswordlama').attr('required', 'required');
            \$('#inppasswordbaru').attr('required', 'required');
            \$('#inpkonfirmasipassword').attr('required', 'required');

            if (\$('#form-keamanan').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add-keamanan').attr('disabled', 'disabled');
                        \$('#add-keamanan').html('Waiting');
                    },
                    success: function(data) {
                        alert(data.msg);
                        location.reload();
                    }
                })
            }
        });
    }();

    // untuk baca lokasi gambar
    function cekLokasiFoto(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                \$('#lihat-gambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "home/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 136,  220 => 135,  176 => 94,  157 => 78,  147 => 71,  137 => 64,  129 => 59,  109 => 43,  107 => 42,  101 => 39,  80 => 20,  66 => 9,  62 => 7,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/profil.html.twig", "/home/airtahu.online/templates/home/profil.html.twig");
    }
}
