<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/bank' => [[['_route' => 'bank', '_controller' => 'App\\Controller\\Admin\\BankController::index'], null, null, null, false, false, null]],
        '/admin/bank/add' => [[['_route' => 'bank_add', '_controller' => 'App\\Controller\\Admin\\BankController::add'], null, null, null, false, false, null]],
        '/admin/bank/get' => [[['_route' => 'bank_get', '_controller' => 'App\\Controller\\Admin\\BankController::get_data'], null, null, null, false, false, null]],
        '/admin/bank/upd' => [[['_route' => 'bank_upd', '_controller' => 'App\\Controller\\Admin\\BankController::upd'], null, null, null, false, false, null]],
        '/admin/bank/del' => [[['_route' => 'bank_del', '_controller' => 'App\\Controller\\Admin\\BankController::del'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/load_notification' => [[['_route' => 'admin_load_notification', '_controller' => 'App\\Controller\\Admin\\DashboardController::load_notification'], null, null, null, false, false, null]],
        '/admin/read_notification' => [[['_route' => 'admin_read_notification', '_controller' => 'App\\Controller\\Admin\\DashboardController::read_notification'], null, null, null, false, false, null]],
        '/admin/kurir' => [[['_route' => 'admin_kurir', '_controller' => 'App\\Controller\\Admin\\KurirController::index'], null, null, null, false, false, null]],
        '/admin/kurir/add' => [[['_route' => 'admin_kurir_add', '_controller' => 'App\\Controller\\Admin\\KurirController::add'], null, null, null, false, false, null]],
        '/admin/kurir/del' => [[['_route' => 'admin_kurir_del', '_controller' => 'App\\Controller\\Admin\\KurirController::del'], null, null, null, false, false, null]],
        '/admin/kurir/res_pass' => [[['_route' => 'admin_kurir_res_pass', '_controller' => 'App\\Controller\\Admin\\KurirController::reset_password'], null, null, null, false, false, null]],
        '/admin/laporan' => [[['_route' => 'laporan', '_controller' => 'App\\Controller\\Admin\\LaporanController::index'], null, null, null, false, false, null]],
        '/admin/laporan/lihat' => [[['_route' => 'lihat_laporan', '_controller' => 'App\\Controller\\Admin\\LaporanController::show'], null, null, null, false, false, null]],
        '/admin/laporan/export' => [[['_route' => 'export_laporan', '_controller' => 'App\\Controller\\Admin\\LaporanController::export'], null, null, null, false, false, null]],
        '/admin/l_bulanan' => [[['_route' => 'laporan_bulanan', '_controller' => 'App\\Controller\\Admin\\LaporanController::laporanBulanan'], null, null, null, false, false, null]],
        '/admin/l_bulanan/lihat' => [[['_route' => 'lihat_laporan_bulanan', '_controller' => 'App\\Controller\\Admin\\LaporanController::showMonth'], null, null, null, false, false, null]],
        '/admin/l_bulanan/export' => [[['_route' => 'export_laporan_bulanan', '_controller' => 'App\\Controller\\Admin\\LaporanController::exportMonth'], null, null, null, false, false, null]],
        '/admin/l_tahunan' => [[['_route' => 'laporan_tahunan', '_controller' => 'App\\Controller\\Admin\\LaporanController::laporanTahunan'], null, null, null, false, false, null]],
        '/admin/l_tahunan/lihat' => [[['_route' => 'lihat_laporan_tahunan', '_controller' => 'App\\Controller\\Admin\\LaporanController::showYear'], null, null, null, false, false, null]],
        '/admin/l_tahunan/export' => [[['_route' => 'export_laporan_tahunan', '_controller' => 'App\\Controller\\Admin\\LaporanController::exportYear'], null, null, null, false, false, null]],
        '/admin/pelanggan' => [[['_route' => 'pelanggan', '_controller' => 'App\\Controller\\Admin\\PelangganController::index'], null, null, null, false, false, null]],
        '/admin/pelanggan/del' => [[['_route' => 'pelanggan_del', '_controller' => 'App\\Controller\\Admin\\PelangganController::del'], null, null, null, false, false, null]],
        '/admin/pelanggan/res_pass' => [[['_route' => 'pelanggan_res_pass', '_controller' => 'App\\Controller\\Admin\\PelangganController::reset_password'], null, null, null, false, false, null]],
        '/admin/pembelian' => [[['_route' => 'pembelian', '_controller' => 'App\\Controller\\Admin\\PembelianController::index'], null, null, null, false, false, null]],
        '/admin/pemesanan' => [[['_route' => 'pemesanan', '_controller' => 'App\\Controller\\Admin\\PemesananController::index'], null, null, null, false, false, null]],
        '/admin/pemesanan/send_chat' => [[['_route' => 'admin_send_chat', '_controller' => 'App\\Controller\\Admin\\PemesananController::send_chat'], null, null, null, false, false, null]],
        '/admin/pemesanan/pilih_kurir' => [[['_route' => 'pemesanan_pilih_kurir', '_controller' => 'App\\Controller\\Admin\\PemesananController::pilih_kurir'], null, null, null, false, false, null]],
        '/admin/pembayaran_transfer' => [[['_route' => 'pembayaran_cod', '_controller' => 'App\\Controller\\Admin\\PemesananController::pembayaran_transfer'], null, null, null, false, false, null]],
        '/admin/produk' => [[['_route' => 'produk', '_controller' => 'App\\Controller\\Admin\\ProdukController::index'], null, null, null, false, false, null]],
        '/admin/produk/add' => [[['_route' => 'produk_add', '_controller' => 'App\\Controller\\Admin\\ProdukController::add'], null, null, null, false, false, null]],
        '/admin/produk/get' => [[['_route' => 'produk_get', '_controller' => 'App\\Controller\\Admin\\ProdukController::get_data'], null, null, null, false, false, null]],
        '/admin/produk/upd' => [[['_route' => 'produk_upd', '_controller' => 'App\\Controller\\Admin\\ProdukController::upd'], null, null, null, false, false, null]],
        '/admin/produk/del' => [[['_route' => 'produk_del', '_controller' => 'App\\Controller\\Admin\\ProdukController::del'], null, null, null, false, false, null]],
        '/admin/profil' => [[['_route' => 'admin_profil', '_controller' => 'App\\Controller\\Admin\\ProfilController::index'], null, null, null, false, false, null]],
        '/admin/profil/upd_foto' => [[['_route' => 'admin_upd_foto', '_controller' => 'App\\Controller\\Admin\\ProfilController::upd_foto'], null, null, null, false, false, null]],
        '/admin/profil/upd_akun' => [[['_route' => 'admin_upd_akun', '_controller' => 'App\\Controller\\Admin\\ProfilController::upd_akun'], null, null, null, false, false, null]],
        '/admin/profil/upd_keamanan' => [[['_route' => 'admin_upd_keamanan', '_controller' => 'App\\Controller\\Admin\\ProfilController::upd_keamanan'], null, null, null, false, false, null]],
        '/admin/stock' => [[['_route' => 'stock', '_controller' => 'App\\Controller\\Admin\\TambahstockController::index'], null, null, null, false, false, null]],
        '/admin/stock/add' => [[['_route' => 'stock_add', '_controller' => 'App\\Controller\\Admin\\TambahstockController::add'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/tentang' => [[['_route' => 'tentang', '_controller' => 'App\\Controller\\HomeController::tentang'], null, null, null, false, false, null]],
        '/kontak' => [[['_route' => 'kontak', '_controller' => 'App\\Controller\\HomeController::kontak'], null, null, null, false, false, null]],
        '/user/keranjang' => [[['_route' => 'keranjang', '_controller' => 'App\\Controller\\KeranjangController::index'], null, null, null, false, false, null]],
        '/user/keranjang/add' => [[['_route' => 'keranjang_add', '_controller' => 'App\\Controller\\KeranjangController::add_cart'], null, null, null, false, false, null]],
        '/user/keranjang/del' => [[['_route' => 'keranjang_del', '_controller' => 'App\\Controller\\KeranjangController::del_cart'], null, null, null, false, false, null]],
        '/user/checkout' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\KeranjangController::checkout'], null, null, null, false, false, null]],
        '/user/finish' => [[['_route' => 'finish', '_controller' => 'App\\Controller\\KeranjangController::checkout_finish'], null, null, null, false, false, null]],
        '/user/send_chat' => [[['_route' => 'send_chat', '_controller' => 'App\\Controller\\KeranjangController::send_chat'], null, null, null, false, false, null]],
        '/user/pembayaran' => [[['_route' => 'pembayaran_transfer', '_controller' => 'App\\Controller\\KeranjangController::pembayaran'], null, null, null, false, false, null]],
        '/kurir' => [[['_route' => 'kurir', '_controller' => 'App\\Controller\\Kurir\\DashboardController::index'], null, null, null, false, false, null]],
        '/kurir/load_notification' => [[['_route' => 'kurir_load_notification', '_controller' => 'App\\Controller\\Kurir\\DashboardController::load_notification'], null, null, null, false, false, null]],
        '/kurir/read_notification' => [[['_route' => 'kurir_read_notification', '_controller' => 'App\\Controller\\Kurir\\DashboardController::read_notification'], null, null, null, false, false, null]],
        '/kurir/pemesanan' => [[['_route' => 'kurir_pemesanan', '_controller' => 'App\\Controller\\Kurir\\PemesananController::index'], null, null, null, false, false, null]],
        '/kurir/pemesanan/setor' => [[['_route' => 'kurir_pembayaran_transfer', '_controller' => 'App\\Controller\\Kurir\\PemesananController::setor'], null, null, null, false, false, null]],
        '/kurir/pembayaran' => [[['_route' => 'kurir_pembayaran_cod', '_controller' => 'App\\Controller\\Kurir\\PemesananController::pembayaran'], null, null, null, false, false, null]],
        '/kurir/profil' => [[['_route' => 'kurir_profil', '_controller' => 'App\\Controller\\Kurir\\ProfilController::index'], null, null, null, false, false, null]],
        '/kurir/profil/upd_foto' => [[['_route' => 'kurir_upd_foto', '_controller' => 'App\\Controller\\Kurir\\ProfilController::upd_foto'], null, null, null, false, false, null]],
        '/kurir/profil/upd_akun' => [[['_route' => 'kurir_upd_akun', '_controller' => 'App\\Controller\\Kurir\\ProfilController::upd_akun'], null, null, null, false, false, null]],
        '/kurir/profil/upd_keamanan' => [[['_route' => 'kurir_upd_keamanan', '_controller' => 'App\\Controller\\Kurir\\ProfilController::upd_keamanan'], null, null, null, false, false, null]],
        '/produk' => [[['_route' => 'produk_sel', '_controller' => 'App\\Controller\\ProdukController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/profil/upd_foto' => [[['_route' => 'foto', '_controller' => 'App\\Controller\\ProfilController::upd_foto'], null, null, null, false, false, null]],
        '/profil/upd_akun' => [[['_route' => 'akun', '_controller' => 'App\\Controller\\ProfilController::upd_akun'], null, null, null, false, false, null]],
        '/profil/upd_keamanan' => [[['_route' => 'keamanan', '_controller' => 'App\\Controller\\ProfilController::upd_keamanan'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/register/add' => [[['_route' => 'register_add', '_controller' => 'App\\Controller\\RegisterController::add'], null, null, null, false, false, null]],
        '/user/riwayat' => [[['_route' => 'riwayat', '_controller' => 'App\\Controller\\RiwayatController::index'], null, null, null, false, false, null]],
        '/login/user' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\SecurityController::login_user'], null, null, null, false, false, null]],
        '/login/admin' => [[['_route' => 'login_admin', '_controller' => 'App\\Controller\\SecurityController::login_admin'], null, null, null, false, false, null]],
        '/login/kurir' => [[['_route' => 'login_kurir', '_controller' => 'App\\Controller\\SecurityController::login_kurir'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/pemesanan/(?'
                    .'|detail/([^/]++)(*:204)'
                    .'|tracking/([^/]++)(*:229)'
                    .'|load_chat/([^/]++)(*:255)'
                .')'
                .'|/user/(?'
                    .'|nota/([^/]++)(*:286)'
                    .'|tra(?'
                        .'|cking/([^/]++)(*:314)'
                        .'|nsfer/([^/]++)(*:336)'
                    .')'
                    .'|load_chat/([^/]++)(*:363)'
                    .'|cetak/([^/]++)(*:385)'
                .')'
                .'|/kurir/pemesanan/(?'
                    .'|detail/([^/]++)(*:429)'
                    .'|bayar/([^/]++)(*:451)'
                .')'
                .'|/produk/detail/([^/]++)(*:483)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        204 => [[['_route' => 'pemesanan_detail', '_controller' => 'App\\Controller\\Admin\\PemesananController::detail'], ['kd'], null, null, false, true, null]],
        229 => [[['_route' => 'admin_tracking', '_controller' => 'App\\Controller\\Admin\\PemesananController::tracking'], ['kd'], null, null, false, true, null]],
        255 => [[['_route' => 'admin_load_chat', '_controller' => 'App\\Controller\\Admin\\PemesananController::load_chat'], ['kd'], null, null, false, true, null]],
        286 => [[['_route' => 'nota', '_controller' => 'App\\Controller\\KeranjangController::nota'], ['kd'], null, null, false, true, null]],
        314 => [[['_route' => 'tracking', '_controller' => 'App\\Controller\\KeranjangController::tracking'], ['kd'], null, null, false, true, null]],
        336 => [[['_route' => 'transfer', '_controller' => 'App\\Controller\\KeranjangController::transfer'], ['kd'], null, null, false, true, null]],
        363 => [[['_route' => 'load_chat', '_controller' => 'App\\Controller\\KeranjangController::load_chat'], ['kd'], null, null, false, true, null]],
        385 => [[['_route' => 'cetak', '_controller' => 'App\\Controller\\KeranjangController::cetak'], ['kd'], null, null, false, true, null]],
        429 => [[['_route' => 'kurir_pemesanan_detail', '_controller' => 'App\\Controller\\Kurir\\PemesananController::detail'], ['kd'], null, null, false, true, null]],
        451 => [[['_route' => 'kurir_pemesanan_bayar', '_controller' => 'App\\Controller\\Kurir\\PemesananController::bayar'], ['kd'], null, null, false, true, null]],
        483 => [
            [['_route' => 'produk_det', '_controller' => 'App\\Controller\\ProdukController::detail'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
