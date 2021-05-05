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

/* admin/pemesanan/tracking.html.twig */
class __TwigTemplate_5f3f3d097f47a196a09a5f25a8617aa9947ec92050e5280c85294d90c4d7b4b6 extends Template
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
        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/pemesanan/tracking.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Produk";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<style>
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
    }

    // line 174
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 176
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
        // line 187
        echo "
";
        // line 189
        echo "<div class=\"container-fluid\">
    <div class=\"row\">
        ";
        // line 192
        echo "        <div class=\"col-lg-6 col-sm-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div id=\"tracking\">
                        <div class=\"tracking-list\">
                            ";
        // line 197
        $context["status_pengantaran"] = [0 => "Dikemas", 1 => "Dikirim", 2 => "Diterima"];
        // line 198
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tracking"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["rows"]) {
            // line 199
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
            // line 210
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "ins", [], "any", false, false, false, 210), "d-m-Y"), "html", null, true);
            echo "<span>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "ins", [], "any", false, false, false, 210), "H:i"), "html", null, true);
            echo "</span>
                                </div>
                                <div class=\"tracking-content\">
                                    Pesanan Anda saat ini sedang : <span>";
            // line 213
            echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["status_pengantaran"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["rows"], "status", [], "any", false, false, false, 213)] ?? null) : null), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rows'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 223
        echo "        ";
        // line 224
        echo "        <div class=\"col-lg-6 col-sm-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"chat-box scrollable position-relative ps-container ps-theme-default ps-active-y\" style=\"height: calc(100vh - 111px);\" data-ps-id=\"a475d3a6-233d-f8ba-8041-00b453cd6a3b\">
                        ";
        // line 229
        echo "                        <div id=\"dom_chat\"></div>
                        ";
        // line 231
        echo "                        <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 0px;\">
                            <div class=\"ps-scrollbar-x\" tabindex=\"0\" style=\"left: 0px; width: 0px;\"></div>
                        </div>
                        <div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; right: 3px; height: 509px;\">
                            <div class=\"ps-scrollbar-y\" tabindex=\"0\" style=\"top: 0px; height: 434px;\"></div>
                        </div>
                    </div>
                    <div class=\"card-body border-top\">
                        <form id=\"form-send\" action=\"../../pemesanan/send_chat\" method=\"POST\">
                            <input type=\"hidden\" name=\"kd_pemesanan\" id=\"kd_pemesanan\" value=\"";
        // line 240
        echo twig_escape_filter($this->env, ($context["kd_pemesanan"] ?? null), "html", null, true);
        echo "\" />

                            <div class=\"row\">
                                <div class=\"col-9\">
                                    <div class=\"input-field mt-0 mb-0\">
                                        <input type=\"text\" name=\"pesan\" id=\"pesan\" class=\"form-control border-0\" placeholder=\"Masukkan Pesan Anda\">
                                    </div>
                                </div>
                                <div class=\"col-3\">
                                    <button type=\"submit\" id=\"kirim\" class=\"btn btn-circle btn-lg btn-cyan float-right text-white\">
                                        <i class=\"fas fa-paper-plane\"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 260
        echo "    </div>
</div>
";
    }

    // line 265
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 266
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>
<script src=\"https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js\"></script>

<script>
    // load chat by ajax
    \$.ajax({
        type: 'GET',
        url: '../../pemesanan/load_chat/' + \$('#kd_pemesanan').val(),
        dataType: 'html',
        success: function (response) {
            \$('#dom_chat').html(response);
        },
        error: function (xhr, ajaxOptions, thrownError) {
            var errorMsg = 'Request Ajax Gagal : ' + xhr.responseText;
            alert(errorMsg);
        }
    });

    function load_chat(kd_pemesanan) {
        \$.ajax({
            type: 'GET',
            url: '../../pemesanan/load_chat/' + kd_pemesanan,
            dataType: 'html',
            success: function (response) {
                \$('#dom_chat').html(response);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                var errorMsg = 'Request Ajax Gagal : ' + xhr.responseText;
                alert(errorMsg);
            }
        });
    }

    // untuk tambah data
    var untukTambahData = function() {
        \$(document).on('submit', '#form-send', function(e) {
            e.preventDefault();
            \$('#pesan').attr('required', 'required')

            if (\$('#form-send').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'html',
                    beforeSend: function() {
                        \$('#kirim').attr('disabled', 'disabled');
                        \$('#kirim').html('<i class=\"fa fa-spinner\"></i>');
                    },
                    success: function(response) {
                        \$('#dom_chat').html(response);
                        \$('#pesan').val('');
                        \$('#kirim').removeAttr('disabled');
                        \$('#kirim').html('<i class=\"fas fa-paper-plane\"></i>');
                    }
                })
            }
        });
    }();
        
    setInterval(function() {
        load_chat(\$('#kd_pemesanan').val())
    }, 5000);
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/pemesanan/tracking.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  364 => 267,  359 => 266,  355 => 265,  349 => 260,  327 => 240,  316 => 231,  313 => 229,  307 => 224,  305 => 223,  298 => 217,  288 => 213,  280 => 210,  267 => 199,  262 => 198,  260 => 197,  253 => 192,  249 => 189,  246 => 187,  234 => 176,  230 => 174,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/pemesanan/tracking.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\pemesanan\\tracking.html.twig");
    }
}
