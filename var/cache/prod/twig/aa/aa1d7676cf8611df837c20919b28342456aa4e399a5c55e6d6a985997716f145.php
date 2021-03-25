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

/* admin/produk/view.html.twig */
class __TwigTemplate_08e8a841e9291fd5e25166ca78e3bf12ce6273d99ff8fa78345601e7f7f1c2de extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/produk/view.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout_admin.html.twig", "admin/produk/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Produk";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["halaman"]) || array_key_exists("halaman", $context) ? $context["halaman"] : (function () { throw new RuntimeError('Variable "halaman" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</h2>
        </div>
    </div>
</div>
";
        // line 19
        echo "
";
        // line 21
        echo "<div class=\"container-fluid\">
    ";
        // line 23
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Form</h3>
                    <hr>
                    <form id=\"form-add\" action=\"produk/add\" method=\"post\" enctype=\"multipart/form-data\">
                        
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("submit"), "html", null, true);
        echo "\">

                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Kode Produk</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpkodeproduk\" id=\"inpkodeproduk\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["kd_produk"]) || array_key_exists("kd_produk", $context) ? $context["kd_produk"] : (function () { throw new RuntimeError('Variable "kd_produk" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\" readonly=\"readonly\" />
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Nama *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpnama\" id=\"inpnama\" placeholder=\"Masukkan nama produk\" />
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Satuan *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpsatuan\" id=\"inpsatuan\" placeholder=\"Masukkan satuan produk\" />
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Harga *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpharga\" id=\"inpharga\" onkeydown=\"return justAngka(event)\" onkeyup=\"javascript:this.value=autoSeparator(this.value);\" placeholder=\"Masukkan harga produk\" />
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Gambar *</h4>
                            <div id=\"lihat_gambar\" style=\"padding-bottom: 10px\"></div>
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\" style=\"height: 35px;\">
                                    <span class=\"input-group-text\">Gambar</span>
                                </div>
                                <div class=\"custom-file\">
                                    <input type=\"file\" class=\"custom-file-input\" name=\"inpgambar\" id=\"inpgambar\" />
                                    <label class=\"custom-file-label form-control-sm\">Choose file</label>
                                </div>
                            </div>
                            <div id=\"centang_gambar\"></div>
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Deskripsi *</h4>
                            <textarea class=\"form-control\" name=\"inptentang\" id=\"inptentang\" placeholder=\"Masukkan deskripsi produk\"></textarea>
                            <div id=\"error\"></div>
                        </div>
                        <button type=\"submit\" id=\"add\" class=\"btn btn-outline-primary btn-sm btn-rounded\">
                            <i class=\"fas fa-plus\"></i>&nbsp;Tambah
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 77
        echo "    ";
        // line 78
        echo "    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    <div class=\"table-responsive\">
                        <table id=\"tabel_produk\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Kode Produk</th>
                                    <th>Nama</th>
                                    <th>Satuan</th>
                                    <th>Stock</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Tentang</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produk"]) || array_key_exists("produk", $context) ? $context["produk"] : (function () { throw new RuntimeError('Variable "produk" does not exist.', 100, $this->source); })()));
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
            // line 101
            echo "                                ";
            $context["stock_terjual"] = (twig_get_attribute($this->env, $this->source, $context["rows"], "stock", [], "any", false, false, false, 101) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 101));
            // line 102
            echo "                                ";
            $context["stock"] = (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah_keranjang", [], "any", false, false, false, 102), null))) ? ((twig_get_attribute($this->env, $this->source, $context["rows"], "stock", [], "any", false, false, false, 102) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah", [], "any", false, false, false, 102))) : (((isset($context["stock_terjual"]) || array_key_exists("stock_terjual", $context) ? $context["stock_terjual"] : (function () { throw new RuntimeError('Variable "stock_terjual" does not exist.', 102, $this->source); })()) - twig_get_attribute($this->env, $this->source, $context["rows"], "jumlah_keranjang", [], "any", false, false, false, 102))));
            // line 103
            echo "                                <tr>
                                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 104), "html", null, true);
            echo ".</td>
                                    <td>
                                        <button id=\"upd\" data-id=\"";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_produk", [], "any", false, false, false, 106), "html", null, true);
            echo "\" class=\"btn btn-outline-primary btn-sm btn-rounded\" style=\"width: 100%\">
                                            <i class=\"fas fa-edit\"></i>&nbsp;Edit
                                        </button>
                                        <div style=\"padding-top: 5px; padding-bottom: 5px;\"></div>
                                        <button id=\"del\" data-id=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "id_produk", [], "any", false, false, false, 110), "html", null, true);
            echo "\" class=\"btn btn-outline-danger btn-sm btn-rounded\" style=\"width: 100%\">
                                            <i class=\"fas fa-trash\"></i>&nbsp;Hapus
                                        </button>
                                    </td>
                                    <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "kd_produk", [], "any", false, false, false, 114), "html", null, true);
            echo "</td>
                                    <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "nama", [], "any", false, false, false, 115), "html", null, true);
            echo "</td>
                                    <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rows"], "satuan", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
                                    <td>";
            // line 117
            echo twig_escape_filter($this->env, (isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 117, $this->source); })()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->separatorHarga(twig_get_attribute($this->env, $this->source, $context["rows"], "harga", [], "any", false, false, false, 118)), "html", null, true);
            echo "</td>
                                    <td><img src=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/produk/" . twig_get_attribute($this->env, $this->source, $context["rows"], "gambar", [], "any", false, false, false, 119))), "html", null, true);
            echo "\" width=\"100\" heigth=\"100\" /></td>
                                    <td>";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["rows"], "tentang", [], "any", false, false, false, 120);
            echo "</td>
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
        // line 123
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ";
        // line 131
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/admin/dist/js/pages/datatable/datatable-basic.init.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>
<script src=\"https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js\"></script>

<script>
    // untuk textarea editor
    CKEDITOR.replace('inptentang', {
        language: 'en',
    });

    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel_produk').DataTable();
    }();

    // untuk tambah data
    var untukTambahData = function() {
        \$('#form-add').submit(function(e) {
            e.preventDefault();

            \$('#inpnama').attr('required', 'required');
            \$('#inpsatuan').attr('required', 'required');
            \$('#inpharga').attr('required', 'required');
            \$('#inpgambar').attr('required', 'required');
            \$('#inptentang').attr('required', 'required');

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

    // untuk get id
    var untukGetIdData = function() {
        \$(document).on('click', '#upd', function() {
            var ini = \$(this);

            \$.ajax({
                type: \"post\",
                url: \"produk/get\",
                dataType: 'json',
                data: {
                    id: ini.data('id')
                },
                beforeSend: function() {
                    ini.attr('disabled', 'disabled');
                    ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting...');
                },
                success: function(data) {
                    \$('form').attr('action', 'produk/upd');
                    \$('form').attr('id', 'form-upd');

                    var lokasi_gambar = \"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/produk/"), "html", null, true);
        echo "\"+data.gambar;
                    \$('#lihat_gambar').html(`<img src=\"`+lokasi_gambar+`\" width=\"100\" heigth=\"100\" />`);
                    \$('#centang_gambar').html(`<input type=\"checkbox\" name=\"ubah_gambar\" id=\"ubah_gambar\" /> Ubah gambar!`);

                    \$('#inpkodeproduk').val(data.kd_produk);
                    \$('#inpnama').val(data.nama);
                    \$('#inpsatuan').val(data.satuan);
                    \$('#inpharga').val(autoSeparator(data.harga));
                    \$('#inpgambar').attr('disabled', 'disabled');
                    \$('#inpgambar').removeAttr('id');
                    CKEDITOR.instances.inptentang.setData(data.tentang)
                    \$('#add').html('<i class=\"fas fa-plus\"></i>&nbsp;Simpan');
                    ini.removeAttr('disabled');
                    ini.html('<i class=\"fas fa-edit\"></i>&nbsp;Edit');
                }
            });
        });
    }();

    // untuk ubah gambar
    var untukUbahGambar = function(){
        \$(document).on('click', '#ubah_gambar', function () {
            var ini = \$(this);
            if (ini.is(':checked')) {
                \$(\"input[name*='inpgambar']\").removeAttr('disabled');
                \$(\"input[name*='inpgambar']\").attr('id', 'inpgambar');
            } else {
                \$(\"input[name*='inpgambar']\").attr('disabled', 'disabled');
                \$(\"input[name*='inpgambar']\").removeAttr('id');
                \$(\"input[name*='inpgambar']\").removeAttr('required');
                ini.parent().parent().find('#error').empty();
            }
        });
    }();

    // untuk ubah data
    var untukUbahData = function() {
        \$(document).on('submit', '#form-upd', function (e) {
            e.preventDefault();

            CKEDITOR.instances.inptentang.updateElement();

            \$('#inpnama').attr('required', 'required');
            \$('#inpsatuan').attr('required', 'required');
            \$('#inpharga').attr('required', 'required');
            \$('#inptentang').attr('required', 'required');

            if (\$('#form-upd').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function () {
                        \$('#add').attr('disabled', 'disabled');
                        \$('#add').html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting...');
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
                })
            }
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
                        url: \"produk/del\",
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

    // untuk angka
\tfunction justAngka(e) {
\t\tif (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 77]) !== -1 ||
\t\t\t(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
\t\t\t(e.keyCode >= 35 && e.keyCode <= 40)) {
\t\t\treturn;
\t\t}
\t\tif ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
\t\t\te.preventDefault();
\t\t}
\t};

    // untuk format harga
\tfunction autoSeparator(Num) {
\t\tNum += '';
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tx = Num.split('.');
\t\tx1 = x[0];
\t\tx2 = x.length > 1 ? '.' + x[1] : '';
\t\tvar rgx = /(\\d+)(\\d{3})/;
\t\twhile (rgx.test(x1))
\t\t\tx1 = x1.replace(rgx, '\$1' + '.' + '\$2');
\t\treturn x1 + x2;
\t};
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/produk/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 211,  312 => 137,  307 => 136,  300 => 135,  292 => 131,  283 => 123,  266 => 120,  262 => 119,  258 => 118,  254 => 117,  250 => 116,  246 => 115,  242 => 114,  235 => 110,  228 => 106,  223 => 104,  220 => 103,  217 => 102,  214 => 101,  197 => 100,  173 => 78,  171 => 77,  127 => 35,  120 => 31,  110 => 23,  107 => 21,  104 => 19,  97 => 14,  92 => 11,  85 => 9,  75 => 6,  68 => 5,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout_admin.html.twig' %}

{% block title %}Produk{% endblock %}

{% block stylesheets %}
<link href=\"{{ asset('assets/admin/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}\" rel=\"stylesheet\"/>
{% endblock %}

{% block body %}
{# begin:: head #}
<div class=\"page-breadcrumb\">
    <div class=\"row\">
        <div class=\"col-7 align-self-center\">
            <h2 class=\"page-title text-truncate text-dark font-weight-medium mb-1\">{{ halaman }}</h2>
        </div>
    </div>
</div>
{# end:: head #}

{# begin:: body #}
<div class=\"container-fluid\">
    {# begin:: form #}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Form</h3>
                    <hr>
                    <form id=\"form-add\" action=\"produk/add\" method=\"post\" enctype=\"multipart/form-data\">
                        
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('submit') }}\">

                        <div class=\"form-group\">
                            <h4 class=\"card-title\">Kode Produk</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpkodeproduk\" id=\"inpkodeproduk\" value=\"{{ kd_produk }}\" readonly=\"readonly\" />
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Nama *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpnama\" id=\"inpnama\" placeholder=\"Masukkan nama produk\" />
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Satuan *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpsatuan\" id=\"inpsatuan\" placeholder=\"Masukkan satuan produk\" />
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Harga *</h4>
                            <input type=\"text\" class=\"form-control form-control-sm\" name=\"inpharga\" id=\"inpharga\" onkeydown=\"return justAngka(event)\" onkeyup=\"javascript:this.value=autoSeparator(this.value);\" placeholder=\"Masukkan harga produk\" />
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Gambar *</h4>
                            <div id=\"lihat_gambar\" style=\"padding-bottom: 10px\"></div>
                            <div class=\"input-group mb-3\">
                                <div class=\"input-group-prepend\" style=\"height: 35px;\">
                                    <span class=\"input-group-text\">Gambar</span>
                                </div>
                                <div class=\"custom-file\">
                                    <input type=\"file\" class=\"custom-file-input\" name=\"inpgambar\" id=\"inpgambar\" />
                                    <label class=\"custom-file-label form-control-sm\">Choose file</label>
                                </div>
                            </div>
                            <div id=\"centang_gambar\"></div>
                            <div id=\"error\"></div>
                            <br>
                            <h4 class=\"card-title\">Deskripsi *</h4>
                            <textarea class=\"form-control\" name=\"inptentang\" id=\"inptentang\" placeholder=\"Masukkan deskripsi produk\"></textarea>
                            <div id=\"error\"></div>
                        </div>
                        <button type=\"submit\" id=\"add\" class=\"btn btn-outline-primary btn-sm btn-rounded\">
                            <i class=\"fas fa-plus\"></i>&nbsp;Tambah
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {# end:: form #}
    {# begin:: tabel #}
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h3 class=\"card-title\">Tabel</h3>
                    <hr>
                    <div class=\"table-responsive\">
                        <table id=\"tabel_produk\" class=\"table table-striped table-bordered display no-wrap\" style=\"width:100%\">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Aksi</th>
                                    <th>Kode Produk</th>
                                    <th>Nama</th>
                                    <th>Satuan</th>
                                    <th>Stock</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Tentang</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for rows in produk %}
                                {% set stock_terjual = (rows.stock - rows.jumlah) %}
                                {% set stock = (rows.jumlah_keranjang == null) ? rows.stock - rows.jumlah : stock_terjual - rows.jumlah_keranjang %}
                                <tr>
                                    <td>{{ loop.index }}.</td>
                                    <td>
                                        <button id=\"upd\" data-id=\"{{ rows.id_produk }}\" class=\"btn btn-outline-primary btn-sm btn-rounded\" style=\"width: 100%\">
                                            <i class=\"fas fa-edit\"></i>&nbsp;Edit
                                        </button>
                                        <div style=\"padding-top: 5px; padding-bottom: 5px;\"></div>
                                        <button id=\"del\" data-id=\"{{ rows.id_produk }}\" class=\"btn btn-outline-danger btn-sm btn-rounded\" style=\"width: 100%\">
                                            <i class=\"fas fa-trash\"></i>&nbsp;Hapus
                                        </button>
                                    </td>
                                    <td>{{ rows.kd_produk }}</td>
                                    <td>{{ rows.nama }}</td>
                                    <td>{{ rows.satuan }}</td>
                                    <td>{{ stock }}</td>
                                    <td>{{ rows.harga|format_rp }}</td>
                                    <td><img src=\"{{ asset('uploads/produk/'~rows.gambar) }}\" width=\"100\" heigth=\"100\" /></td>
                                    <td>{{ rows.tentang|raw }}</td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {# end:: tabel #}
</div>
{# end:: body #}
{% endblock %}

{% block javascripts %}
<script src=\"{{ asset('assets/admin/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}\"></script>
<script src=\"{{ asset('assets/admin/dist/js/pages/datatable/datatable-basic.init.js') }}\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js\"></script>
<script src=\"https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js\"></script>

<script>
    // untuk textarea editor
    CKEDITOR.replace('inptentang', {
        language: 'en',
    });

    // untuk datatable
    var untukDataTabel = function() {
        \$('#tabel_produk').DataTable();
    }();

    // untuk tambah data
    var untukTambahData = function() {
        \$('#form-add').submit(function(e) {
            e.preventDefault();

            \$('#inpnama').attr('required', 'required');
            \$('#inpsatuan').attr('required', 'required');
            \$('#inpharga').attr('required', 'required');
            \$('#inpgambar').attr('required', 'required');
            \$('#inptentang').attr('required', 'required');

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

    // untuk get id
    var untukGetIdData = function() {
        \$(document).on('click', '#upd', function() {
            var ini = \$(this);

            \$.ajax({
                type: \"post\",
                url: \"produk/get\",
                dataType: 'json',
                data: {
                    id: ini.data('id')
                },
                beforeSend: function() {
                    ini.attr('disabled', 'disabled');
                    ini.html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting...');
                },
                success: function(data) {
                    \$('form').attr('action', 'produk/upd');
                    \$('form').attr('id', 'form-upd');

                    var lokasi_gambar = \"{{ asset('uploads/produk/') }}\"+data.gambar;
                    \$('#lihat_gambar').html(`<img src=\"`+lokasi_gambar+`\" width=\"100\" heigth=\"100\" />`);
                    \$('#centang_gambar').html(`<input type=\"checkbox\" name=\"ubah_gambar\" id=\"ubah_gambar\" /> Ubah gambar!`);

                    \$('#inpkodeproduk').val(data.kd_produk);
                    \$('#inpnama').val(data.nama);
                    \$('#inpsatuan').val(data.satuan);
                    \$('#inpharga').val(autoSeparator(data.harga));
                    \$('#inpgambar').attr('disabled', 'disabled');
                    \$('#inpgambar').removeAttr('id');
                    CKEDITOR.instances.inptentang.setData(data.tentang)
                    \$('#add').html('<i class=\"fas fa-plus\"></i>&nbsp;Simpan');
                    ini.removeAttr('disabled');
                    ini.html('<i class=\"fas fa-edit\"></i>&nbsp;Edit');
                }
            });
        });
    }();

    // untuk ubah gambar
    var untukUbahGambar = function(){
        \$(document).on('click', '#ubah_gambar', function () {
            var ini = \$(this);
            if (ini.is(':checked')) {
                \$(\"input[name*='inpgambar']\").removeAttr('disabled');
                \$(\"input[name*='inpgambar']\").attr('id', 'inpgambar');
            } else {
                \$(\"input[name*='inpgambar']\").attr('disabled', 'disabled');
                \$(\"input[name*='inpgambar']\").removeAttr('id');
                \$(\"input[name*='inpgambar']\").removeAttr('required');
                ini.parent().parent().find('#error').empty();
            }
        });
    }();

    // untuk ubah data
    var untukUbahData = function() {
        \$(document).on('submit', '#form-upd', function (e) {
            e.preventDefault();

            CKEDITOR.instances.inptentang.updateElement();

            \$('#inpnama').attr('required', 'required');
            \$('#inpsatuan').attr('required', 'required');
            \$('#inpharga').attr('required', 'required');
            \$('#inptentang').attr('required', 'required');

            if (\$('#form-upd').parsley().isValid() == true) {
                \$.ajax({
                    method: \$(this).attr('method'),
                    url: \$(this).attr('action'),
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    beforeSend: function () {
                        \$('#add').attr('disabled', 'disabled');
                        \$('#add').html('<i class=\"fas fa-spinner\"></i>&nbsp;Waiting...');
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
                })
            }
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
                        url: \"produk/del\",
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

    // untuk angka
\tfunction justAngka(e) {
\t\tif (\$.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 77]) !== -1 ||
\t\t\t(e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
\t\t\t(e.keyCode >= 35 && e.keyCode <= 40)) {
\t\t\treturn;
\t\t}
\t\tif ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
\t\t\te.preventDefault();
\t\t}
\t};

    // untuk format harga
\tfunction autoSeparator(Num) {
\t\tNum += '';
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tNum = Num.replace('.', '');
\t\tx = Num.split('.');
\t\tx1 = x[0];
\t\tx2 = x.length > 1 ? '.' + x[1] : '';
\t\tvar rgx = /(\\d+)(\\d{3})/;
\t\twhile (rgx.test(x1))
\t\t\tx1 = x1.replace(rgx, '\$1' + '.' + '\$2');
\t\treturn x1 + x2;
\t};
</script>
{% endblock %}", "admin/produk/view.html.twig", "P:\\Project\\PHP\\si\\SI-Pemesanan-Air-Tahu\\templates\\admin\\produk\\view.html.twig");
    }
}
