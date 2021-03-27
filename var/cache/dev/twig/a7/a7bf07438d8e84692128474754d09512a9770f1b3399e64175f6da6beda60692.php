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

/* admin/tracking/view.html.twig */
class __TwigTemplate_9f6b01edc4e0e5e8e8032f3a000ef546d18a3a6b073b454f4919722fc307c14c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tracking/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tracking/view.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/tracking/view.html.twig", 1);
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

        echo "Produk";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

<style>
    .tracking-detail {
        padding: 3rem 0
    }

    #tracking {
        margin-bottom: 1rem
    }

    [class*=tracking-status-] p {
        margin: 0;
        font-size: 1.1rem;
        color: #fff;
        text-transform: uppercase;
        text-align: center
    }

    [class*=tracking-status-] {
        padding: 1.6rem 0
    }

    .tracking-status-intransit {
        background-color: #65aee0
    }

    .tracking-status-outfordelivery {
        background-color: #f5a551
    }

    .tracking-status-deliveryoffice {
        background-color: #f7dc6f
    }

    .tracking-status-delivered {
        background-color: #4cbb87
    }

    .tracking-status-attemptfail {
        background-color: #b789c7
    }

    .tracking-status-error,
    .tracking-status-exception {
        background-color: #d26759
    }

    .tracking-status-expired {
        background-color: #616e7d
    }

    .tracking-status-pending {
        background-color: #ccc
    }

    .tracking-status-inforeceived {
        background-color: #214977
    }

    .tracking-list {
        border: 1px solid #e5e5e5
    }

    .tracking-item {
        border-left: 1px solid #e5e5e5;
        position: relative;
        padding: 2rem 1.5rem .5rem 2.5rem;
        font-size: .9rem;
        margin-left: 3rem;
        min-height: 5rem
    }

    .tracking-item:last-child {
        padding-bottom: 4rem
    }

    .tracking-item .tracking-date {
        margin-bottom: .5rem
    }

    .tracking-item .tracking-date span {
        color: #888;
        font-size: 85%;
        padding-left: .4rem
    }

    .tracking-item .tracking-content {
        padding: .5rem .8rem;
        background-color: #f4f4f4;
        border-radius: .5rem
    }

    .tracking-item .tracking-content span {
        display: block;
        color: #888;
        font-size: 85%
    }

    .tracking-item .tracking-icon {
        line-height: 2.6rem;
        position: absolute;
        left: -1.3rem;
        width: 2.6rem;
        height: 2.6rem;
        text-align: center;
        border-radius: 50%;
        font-size: 1.1rem;
        background-color: #fff;
        color: #fff
    }

    .tracking-item .tracking-icon.status-sponsored {
        background-color: #f68
    }

    .tracking-item .tracking-icon.status-delivered {
        background-color: #4cbb87
    }

    .tracking-item .tracking-icon.status-outfordelivery {
        background-color: #f5a551
    }

    .tracking-item .tracking-icon.status-deliveryoffice {
        background-color: #f7dc6f
    }

    .tracking-item .tracking-icon.status-attemptfail {
        background-color: #b789c7
    }

    .tracking-item .tracking-icon.status-exception {
        background-color: #d26759
    }

    .tracking-item .tracking-icon.status-inforeceived {
        background-color: #214977
    }

    .tracking-item .tracking-icon.status-intransit {
        color: #e5e5e5;
        border: 1px solid #e5e5e5;
        font-size: .6rem
    }

    @media(min-width:992px) {
        .tracking-item {
            margin-left: 10rem
        }

        .tracking-item .tracking-date {
            position: absolute;
            left: -10rem;
            width: 7.5rem;
            text-align: right
        }

        .tracking-item .tracking-date span {
            display: block
        }

        .tracking-item .tracking-content {
            padding: 0;
            background-color: transparent
        }
    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 176
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 178
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-6 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">Tracking Pemesanan</h2>
        </div>
        <div class=\"col-6 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">Chat</h2>
        </div>
    </div>
</div>
";
        // line 189
        echo "
";
        // line 191
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        ";
        // line 194
        echo "        <div class=\"col-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div id=\"tracking\">
                        <div class=\"tracking-list\">
                            ";
        // line 199
        $context["status_pengantaran"] = [0 => "Dikemas", 1 => "Dikirim", 2 => "Diterima"];
        // line 200
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tracking"]) || array_key_exists("tracking", $context) ? $context["tracking"] : (function () { throw new RuntimeError('Variable "tracking" does not exist.', 200, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 201
            echo "                            <div class=\"tracking-item\">
                                <div class=\"tracking-icon status-intransit\">
                                    <svg class=\"svg-inline--fa fa-circle fa-w-16\" aria-hidden=\"true\" data-prefix=\"fas\"
                                        data-icon=\"circle\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 12 512 512\">
                                        <path fill=\"currentColor\"
                                            d=\"M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z\">
                                        </path>
                                    </svg>
                                    <i class=\"fas fa-circle\"></i>
                                </div>
                                <div class=\"tracking-date\">
                                    ";
            // line 212
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "ins", [], "any", false, false, false, 212), "d-m-Y"), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "ins", [], "any", false, false, false, 212), "H:i"), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"tracking-content\">
                                    Pesanan Anda saat ini sedang : <span>";
            // line 215
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["status_pengantaran"]) || array_key_exists("status_pengantaran", $context) ? $context["status_pengantaran"] : (function () { throw new RuntimeError('Variable "status_pengantaran" does not exist.', 215, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["rows"], "status", [], "any", false, false, false, 215), [], "array", false, false, false, 215), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 225
        echo "        ";
        // line 226
        echo "        <div class=\"col-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"chat-box scrollable position-relative ps-container ps-theme-default ps-active-y\" style=\"height: calc(100vh - 111px);\" data-ps-id=\"a475d3a6-233d-f8ba-8041-00b453cd6a3b\">
                        <!--chat Row -->
                        <ul class=\"chat-list list-style-none px-3 pt-3\">
                            <!--chat Row -->
                            <li class=\"chat-item list-style-none mt-3\">
                                <div class=\"chat-img d-inline-block\"><img src=\"http://www.emsateknik.com.tr/wp-content/uploads/2018/01/avatar-png-1-450x450.png\" alt=\"user\" class=\"rounded-circle\" width=\"45\">
                                </div>
                                <div class=\"chat-content d-inline-block pl-3\">
                                    <h6 class=\"font-weight-medium\">James Anderson</h6>
                                    <div class=\"msg p-2 d-inline-block mb-1\">Lorem
                                        Ipsum is simply
                                        dummy text of the
                                        printing &amp; type setting industry.</div>
                                </div>
                                <div class=\"chat-time d-block font-10 mt-1 mr-0 mb-3\">10:56 am
                                </div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item list-style-none mt-3\">
                                <div class=\"chat-img d-inline-block\"><img src=\"http://www.emsateknik.com.tr/wp-content/uploads/2018/01/avatar-png-1-450x450.png\" alt=\"user\"
                                        class=\"rounded-circle\" width=\"45\">
                                </div>
                                <div class=\"chat-content d-inline-block pl-3\">
                                    <h6 class=\"font-weight-medium\">Bianca Doe</h6>
                                    <div class=\"msg p-2 d-inline-block mb-1\">It’s
                                        Great opportunity to
                                        work.</div>
                                </div>
                                <div class=\"chat-time d-block font-10 mt-1 mr-0 mb-3\">10:57 am
                                </div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item odd list-style-none mt-3\">
                                <div class=\"chat-content text-right d-inline-block pl-3\">
                                    <div class=\"box msg p-2 d-inline-block mb-1\">I
                                        would love to
                                        join the team.</div>
                                    <br>
                                </div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item odd list-style-none mt-3\">
                                <div class=\"chat-content text-right d-inline-block pl-3\">
                                    <div class=\"box msg p-2 d-inline-block mb-1 box\">
                                        Whats budget
                                        of the new project.</div>
                                    <br>
                                </div>
                                <div class=\"chat-time text-right d-block font-10 mt-1 mr-0 mb-3\">
                                    10:59 am</div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item list-style-none mt-3\">
                                <div class=\"chat-img d-inline-block\"><img src=\"http://www.emsateknik.com.tr/wp-content/uploads/2018/01/avatar-png-1-450x450.png\" alt=\"user\"
                                        class=\"rounded-circle\" width=\"45\">
                                </div>
                                <div class=\"chat-content d-inline-block pl-3\">
                                    <h6 class=\"font-weight-medium\">Angelina Rhodes</h6>
                                    <div class=\"msg p-2 d-inline-block mb-1\">Well we
                                        have good budget
                                        for the project
                                    </div>
                                </div>
                                <div class=\"chat-time d-block font-10 mt-1 mr-0 mb-3\">11:00 am
                                </div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item odd list-style-none mt-3\">
                                <div class=\"chat-content text-right d-inline-block pl-3\">
                                    <div class=\"box msg p-2 d-inline-block mb-1\">I
                                        would love to
                                        join the team.</div>
                                    <br>
                                </div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item odd list-style-none mt-3\">
                                <div class=\"chat-content text-right d-inline-block pl-3\">
                                    <div class=\"box msg p-2 d-inline-block mb-1 box\">
                                        Whats budget
                                        of the new project.</div>
                                    <br>
                                </div>
                                <div class=\"chat-time text-right d-block font-10 mt-1 mr-0 mb-3\">
                                    10:59 am</div>
                            </li>
                        </ul>
                        <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 0px;\">
                            <div class=\"ps-scrollbar-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div>
                        </div>
                        <div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; right: 3px; height: 509px;\">
                            <div class=\"ps-scrollbar-y\" tabindex=\"0\" style=\"top: 0px; height: 434px;\"></div>
                        </div>
                    </div>
                    <div class=\"card-body border-top\">
                        <div class=\"row\">
                            <div class=\"col-9\">
                                <div class=\"input-field mt-0 mb-0\">
                                    <input id=\"textarea1\" placeholder=\"Type and enter\" class=\"form-control border-0\"
                                        type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-3\">
                                <a class=\"btn-circle btn-lg btn-cyan float-right text-white\"
                                    href=\"javascript:void(0)\"><i class=\"fas fa-paper-plane\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 341
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 346
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 347
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>
<script src=\"https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js\"></script>

<script>
    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel_kurir').DataTable();
    }();

    // untuk tambah data
    var untukTambahData = function() {
        \$('#form-add').submit(function(e) {
            e.preventDefault();

            \$('#inpnama').attr('required', 'required');
            \$('#inpemail').attr('required', 'required');
            \$('#inpusername').attr('required', 'required');
            \$('#inppassword').attr('required', 'required');

            if (\$('#form-add').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add').attr('disabled', 'disabled');
                        \$('#add').html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting...');
                    },
                    success: function(data) {
                        swal({
                            title: data.title,
                            text: data.text,
                            icon: data.type,
                            button: data.button,
                        })
                        .then((value) => {
                            location.reload();
                        });
                    }
                })
            }
        });
    }();

    // untuk reset password data
    var untukResetPassData = function() {
        \$(document).on('click', '#res-pass', function() {
            var ini = \$(this);
            swal({
                title: \"Apakah Anda yakin ingin mereset password?\",
                text: \"Akun yang telah direset tidak dapat dikembalikan!\",
                icon: \"warning\",
                buttons: true,
                dangerMode: true,
            })
            .then((del) => {
                if (del) {
                    \$.ajax({
                        type: \"post\",
                        url: \"kurir/res_pass\",
                        dataType: 'json',
                        data: {
                            id: ini.data('id')
                        },
                        beforeSend: function () {
                            ini.attr('disabled', 'disabled');
                            ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                        },
                        success: function (response) {
                            swal({
                                title: response.title,
                                text: response.text,
                                icon: response.type,
                                button: response.button,
                            })
                            .then((value) => {
                                location.reload();
                            });
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    }();

    // untuk hapus data
    var untukHapusData = function() {
        \$(document).on('click', '#del', function() {
            var ini = \$(this);

            swal({
                title: \"Apakah Anda yakin ingin menghapusnya?\",
                text: \"Data yang telah dihapus tidak dapat dikembalikan!\",
                icon: \"warning\",
                buttons: true,
                dangerMode: true,
            })
            .then((del) => {
                if (del) {
                    \$.ajax({
                        type: \"post\",
                        url: \"kurir/del\",
                        dataType: 'json',
                        data: {
                            id: ini.data('id')
                        },
                        beforeSend: function () {
                            ini.attr('disabled', 'disabled');
                            ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting...');
                        },
                        success: function (data) {
                            swal({
                                title: data.title,
                                text: data.text,
                                icon: data.type,
                                button: data.button,
                            })
                            .then((value) => {
                                location.reload();
                            });
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    }();
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/tracking/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 348,  491 => 347,  481 => 346,  469 => 341,  353 => 226,  351 => 225,  344 => 219,  334 => 215,  326 => 212,  313 => 201,  308 => 200,  306 => 199,  299 => 194,  295 => 191,  292 => 189,  280 => 178,  270 => 176,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout_admin.html.twig' %}

{% block title %}Produk{% endblock %}

{% block stylesheets %}
<link href=\"{{ asset('assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}\" rel=\"stylesheet\"/>

<style>
    .tracking-detail {
        padding: 3rem 0
    }

    #tracking {
        margin-bottom: 1rem
    }

    [class*=tracking-status-] p {
        margin: 0;
        font-size: 1.1rem;
        color: #fff;
        text-transform: uppercase;
        text-align: center
    }

    [class*=tracking-status-] {
        padding: 1.6rem 0
    }

    .tracking-status-intransit {
        background-color: #65aee0
    }

    .tracking-status-outfordelivery {
        background-color: #f5a551
    }

    .tracking-status-deliveryoffice {
        background-color: #f7dc6f
    }

    .tracking-status-delivered {
        background-color: #4cbb87
    }

    .tracking-status-attemptfail {
        background-color: #b789c7
    }

    .tracking-status-error,
    .tracking-status-exception {
        background-color: #d26759
    }

    .tracking-status-expired {
        background-color: #616e7d
    }

    .tracking-status-pending {
        background-color: #ccc
    }

    .tracking-status-inforeceived {
        background-color: #214977
    }

    .tracking-list {
        border: 1px solid #e5e5e5
    }

    .tracking-item {
        border-left: 1px solid #e5e5e5;
        position: relative;
        padding: 2rem 1.5rem .5rem 2.5rem;
        font-size: .9rem;
        margin-left: 3rem;
        min-height: 5rem
    }

    .tracking-item:last-child {
        padding-bottom: 4rem
    }

    .tracking-item .tracking-date {
        margin-bottom: .5rem
    }

    .tracking-item .tracking-date span {
        color: #888;
        font-size: 85%;
        padding-left: .4rem
    }

    .tracking-item .tracking-content {
        padding: .5rem .8rem;
        background-color: #f4f4f4;
        border-radius: .5rem
    }

    .tracking-item .tracking-content span {
        display: block;
        color: #888;
        font-size: 85%
    }

    .tracking-item .tracking-icon {
        line-height: 2.6rem;
        position: absolute;
        left: -1.3rem;
        width: 2.6rem;
        height: 2.6rem;
        text-align: center;
        border-radius: 50%;
        font-size: 1.1rem;
        background-color: #fff;
        color: #fff
    }

    .tracking-item .tracking-icon.status-sponsored {
        background-color: #f68
    }

    .tracking-item .tracking-icon.status-delivered {
        background-color: #4cbb87
    }

    .tracking-item .tracking-icon.status-outfordelivery {
        background-color: #f5a551
    }

    .tracking-item .tracking-icon.status-deliveryoffice {
        background-color: #f7dc6f
    }

    .tracking-item .tracking-icon.status-attemptfail {
        background-color: #b789c7
    }

    .tracking-item .tracking-icon.status-exception {
        background-color: #d26759
    }

    .tracking-item .tracking-icon.status-inforeceived {
        background-color: #214977
    }

    .tracking-item .tracking-icon.status-intransit {
        color: #e5e5e5;
        border: 1px solid #e5e5e5;
        font-size: .6rem
    }

    @media(min-width:992px) {
        .tracking-item {
            margin-left: 10rem
        }

        .tracking-item .tracking-date {
            position: absolute;
            left: -10rem;
            width: 7.5rem;
            text-align: right
        }

        .tracking-item .tracking-date span {
            display: block
        }

        .tracking-item .tracking-content {
            padding: 0;
            background-color: transparent
        }
    }
</style>
{% endblock %}

{% block body %}
{# begin:: head #}
<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-6 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">Tracking Pemesanan</h2>
        </div>
        <div class=\"col-6 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">Chat</h2>
        </div>
    </div>
</div>
{# end:: head #}

{# begin:: body #}
<div class=\"container-fluid\">
    <div class=\"row\">
        {# begin:: chat #}
        <div class=\"col-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div id=\"tracking\">
                        <div class=\"tracking-list\">
                            {% set status_pengantaran = ['Dikemas', 'Dikirim', 'Diterima'] %}
                            {% for rows in tracking %}
                            <div class=\"tracking-item\">
                                <div class=\"tracking-icon status-intransit\">
                                    <svg class=\"svg-inline--fa fa-circle fa-w-16\" aria-hidden=\"true\" data-prefix=\"fas\"
                                        data-icon=\"circle\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 12 512 512\">
                                        <path fill=\"currentColor\"
                                            d=\"M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z\">
                                        </path>
                                    </svg>
                                    <i class=\"fas fa-circle\"></i>
                                </div>
                                <div class=\"tracking-date\">
                                    {{ rows.ins|date('d-m-Y') }}<span>{{ rows.ins|date('H:i') }}</span>
                                </div>
                                <div class=\"tracking-content\">
                                    Pesanan Anda saat ini sedang : <span>{{ status_pengantaran[rows.status] }}</span>
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {# end:: chat #}
        {# begin:: chat #}
        <div class=\"col-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"chat-box scrollable position-relative ps-container ps-theme-default ps-active-y\" style=\"height: calc(100vh - 111px);\" data-ps-id=\"a475d3a6-233d-f8ba-8041-00b453cd6a3b\">
                        <!--chat Row -->
                        <ul class=\"chat-list list-style-none px-3 pt-3\">
                            <!--chat Row -->
                            <li class=\"chat-item list-style-none mt-3\">
                                <div class=\"chat-img d-inline-block\"><img src=\"http://www.emsateknik.com.tr/wp-content/uploads/2018/01/avatar-png-1-450x450.png\" alt=\"user\" class=\"rounded-circle\" width=\"45\">
                                </div>
                                <div class=\"chat-content d-inline-block pl-3\">
                                    <h6 class=\"font-weight-medium\">James Anderson</h6>
                                    <div class=\"msg p-2 d-inline-block mb-1\">Lorem
                                        Ipsum is simply
                                        dummy text of the
                                        printing &amp; type setting industry.</div>
                                </div>
                                <div class=\"chat-time d-block font-10 mt-1 mr-0 mb-3\">10:56 am
                                </div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item list-style-none mt-3\">
                                <div class=\"chat-img d-inline-block\"><img src=\"http://www.emsateknik.com.tr/wp-content/uploads/2018/01/avatar-png-1-450x450.png\" alt=\"user\"
                                        class=\"rounded-circle\" width=\"45\">
                                </div>
                                <div class=\"chat-content d-inline-block pl-3\">
                                    <h6 class=\"font-weight-medium\">Bianca Doe</h6>
                                    <div class=\"msg p-2 d-inline-block mb-1\">It’s
                                        Great opportunity to
                                        work.</div>
                                </div>
                                <div class=\"chat-time d-block font-10 mt-1 mr-0 mb-3\">10:57 am
                                </div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item odd list-style-none mt-3\">
                                <div class=\"chat-content text-right d-inline-block pl-3\">
                                    <div class=\"box msg p-2 d-inline-block mb-1\">I
                                        would love to
                                        join the team.</div>
                                    <br>
                                </div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item odd list-style-none mt-3\">
                                <div class=\"chat-content text-right d-inline-block pl-3\">
                                    <div class=\"box msg p-2 d-inline-block mb-1 box\">
                                        Whats budget
                                        of the new project.</div>
                                    <br>
                                </div>
                                <div class=\"chat-time text-right d-block font-10 mt-1 mr-0 mb-3\">
                                    10:59 am</div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item list-style-none mt-3\">
                                <div class=\"chat-img d-inline-block\"><img src=\"http://www.emsateknik.com.tr/wp-content/uploads/2018/01/avatar-png-1-450x450.png\" alt=\"user\"
                                        class=\"rounded-circle\" width=\"45\">
                                </div>
                                <div class=\"chat-content d-inline-block pl-3\">
                                    <h6 class=\"font-weight-medium\">Angelina Rhodes</h6>
                                    <div class=\"msg p-2 d-inline-block mb-1\">Well we
                                        have good budget
                                        for the project
                                    </div>
                                </div>
                                <div class=\"chat-time d-block font-10 mt-1 mr-0 mb-3\">11:00 am
                                </div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item odd list-style-none mt-3\">
                                <div class=\"chat-content text-right d-inline-block pl-3\">
                                    <div class=\"box msg p-2 d-inline-block mb-1\">I
                                        would love to
                                        join the team.</div>
                                    <br>
                                </div>
                            </li>
                            <!--chat Row -->
                            <li class=\"chat-item odd list-style-none mt-3\">
                                <div class=\"chat-content text-right d-inline-block pl-3\">
                                    <div class=\"box msg p-2 d-inline-block mb-1 box\">
                                        Whats budget
                                        of the new project.</div>
                                    <br>
                                </div>
                                <div class=\"chat-time text-right d-block font-10 mt-1 mr-0 mb-3\">
                                    10:59 am</div>
                            </li>
                        </ul>
                        <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 0px;\">
                            <div class=\"ps-scrollbar-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div>
                        </div>
                        <div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; right: 3px; height: 509px;\">
                            <div class=\"ps-scrollbar-y\" tabindex=\"0\" style=\"top: 0px; height: 434px;\"></div>
                        </div>
                    </div>
                    <div class=\"card-body border-top\">
                        <div class=\"row\">
                            <div class=\"col-9\">
                                <div class=\"input-field mt-0 mb-0\">
                                    <input id=\"textarea1\" placeholder=\"Type and enter\" class=\"form-control border-0\"
                                        type=\"text\">
                                </div>
                            </div>
                            <div class=\"col-3\">
                                <a class=\"btn-circle btn-lg btn-cyan float-right text-white\"
                                    href=\"javascript:void(0)\"><i class=\"fas fa-paper-plane\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {# end:: chat #}
    </div>
</div>
{# end:: body #}
{% endblock %}

{% block javascripts %}
<script src=\"{{ asset('assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('assets/admin/dist/js/pages/datatable/datatable-basic.init.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>
<script src=\"https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js\"></script>

<script>
    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel_kurir').DataTable();
    }();

    // untuk tambah data
    var untukTambahData = function() {
        \$('#form-add').submit(function(e) {
            e.preventDefault();

            \$('#inpnama').attr('required', 'required');
            \$('#inpemail').attr('required', 'required');
            \$('#inpusername').attr('required', 'required');
            \$('#inppassword').attr('required', 'required');

            if (\$('#form-add').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function() {
                        \$('#add').attr('disabled', 'disabled');
                        \$('#add').html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting...');
                    },
                    success: function(data) {
                        swal({
                            title: data.title,
                            text: data.text,
                            icon: data.type,
                            button: data.button,
                        })
                        .then((value) => {
                            location.reload();
                        });
                    }
                })
            }
        });
    }();

    // untuk reset password data
    var untukResetPassData = function() {
        \$(document).on('click', '#res-pass', function() {
            var ini = \$(this);
            swal({
                title: \"Apakah Anda yakin ingin mereset password?\",
                text: \"Akun yang telah direset tidak dapat dikembalikan!\",
                icon: \"warning\",
                buttons: true,
                dangerMode: true,
            })
            .then((del) => {
                if (del) {
                    \$.ajax({
                        type: \"post\",
                        url: \"kurir/res_pass\",
                        dataType: 'json',
                        data: {
                            id: ini.data('id')
                        },
                        beforeSend: function () {
                            ini.attr('disabled', 'disabled');
                            ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Menunggu');
                        },
                        success: function (response) {
                            swal({
                                title: response.title,
                                text: response.text,
                                icon: response.type,
                                button: response.button,
                            })
                            .then((value) => {
                                location.reload();
                            });
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    }();

    // untuk hapus data
    var untukHapusData = function() {
        \$(document).on('click', '#del', function() {
            var ini = \$(this);

            swal({
                title: \"Apakah Anda yakin ingin menghapusnya?\",
                text: \"Data yang telah dihapus tidak dapat dikembalikan!\",
                icon: \"warning\",
                buttons: true,
                dangerMode: true,
            })
            .then((del) => {
                if (del) {
                    \$.ajax({
                        type: \"post\",
                        url: \"kurir/del\",
                        dataType: 'json',
                        data: {
                            id: ini.data('id')
                        },
                        beforeSend: function () {
                            ini.attr('disabled', 'disabled');
                            ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting...');
                        },
                        success: function (data) {
                            swal({
                                title: data.title,
                                text: data.text,
                                icon: data.type,
                                button: data.button,
                            })
                            .then((value) => {
                                location.reload();
                            });
                        }
                    });
                } else {
                    return false;
                }
            });
        });
    }();
</script>
{% endblock %}", "admin/tracking/view.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\tracking\\view.html.twig");
    }
}
