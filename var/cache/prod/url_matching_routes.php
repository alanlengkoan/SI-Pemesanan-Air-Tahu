<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/bank' => [[['_route' => 'bank', '_controller' => 'App\\Controller\\Admin\\BankController::index'], null, null, null, false, false, null]],
        '/admin/bank/add' => [[['_route' => 'bank_add', '_controller' => 'App\\Controller\\Admin\\BankController::add'], null, null, null, false, false, null]],
        '/admin/bank/get' => [[['_route' => 'bank_get', '_controller' => 'App\\Controller\\Admin\\BankController::get_data'], null, null, null, false, false, null]],
        '/admin/bank/upd' => [[['_route' => 'bank_upd', '_controller' => 'App\\Controller\\Admin\\BankController::upd'], null, null, null, false, false, null]],
        '/admin/bank/del' => [[['_route' => 'bank_del', '_controller' => 'App\\Controller\\Admin\\BankController::del'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/laporan' => [[['_route' => 'laporan', '_controller' => 'App\\Controller\\Admin\\LaporanController::index'], null, null, null, false, false, null]],
        '/admin/laporan/lihat' => [[['_route' => 'lihat_laporan', '_controller' => 'App\\Controller\\Admin\\LaporanController::show'], null, null, null, false, false, null]],
        '/admin/laporan/export' => [[['_route' => 'export_laporan', '_controller' => 'App\\Controller\\Admin\\LaporanController::export'], null, null, null, false, false, null]],
        '/admin/l_bulanan' => [[['_route' => 'laporan_bulanan', '_controller' => 'App\\Controller\\Admin\\LaporanController::laporanBulanan'], null, null, null, false, false, null]],
        '/admin/l_bulanan/lihat' => [[['_route' => 'lihat_laporan_bulanan', '_controller' => 'App\\Controller\\Admin\\LaporanController::showMonth'], null, null, null, false, false, null]],
        '/admin/l_bulanan/export' => [[['_route' => 'export_laporan_bulanan', '_controller' => 'App\\Controller\\Admin\\LaporanController::exportMonth'], null, null, null, false, false, null]],
        '/admin/l_tahunan' => [[['_route' => 'laporan_tahunan', '_controller' => 'App\\Controller\\Admin\\LaporanController::laporanTahunan'], null, null, null, false, false, null]],
        '/admin/l_tahunan/lihat' => [[['_route' => 'lihat_laporan_tahunan', '_controller' => 'App\\Controller\\Admin\\LaporanController::showYear'], null, null, null, false, false, null]],
        '/admin/l_tahunan/export' => [[['_route' => 'export_laporan_tahunan', '_controller' => 'App\\Controller\\Admin\\LaporanController::exportYear'], null, null, null, false, false, null]],
        '/admin/pembelian' => [[['_route' => 'pembelian', '_controller' => 'App\\Controller\\Admin\\PembelianController::index'], null, null, null, false, false, null]],
        '/admin/pemesanan' => [[['_route' => 'pemesanan', '_controller' => 'App\\Controller\\Admin\\PemesananController::index'], null, null, null, false, false, null]],
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
        '/user/pembayaran' => [[['_route' => 'pembayaran_transfer', '_controller' => 'App\\Controller\\KeranjangController::pembayaran'], null, null, null, false, false, null]],
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
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/pemesanan/(?'
                    .'|detail/([^/]++)(*:42)'
                    .'|bayar/([^/]++)(*:63)'
                .')'
                .'|/user/(?'
                    .'|nota/([^/]++)(*:93)'
                    .'|cetak/([^/]++)(*:114)'
                    .'|transfer/([^/]++)(*:139)'
                .')'
                .'|/produk/detail/([^/]++)(*:171)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        42 => [[['_route' => 'pemesanan_detail', '_controller' => 'App\\Controller\\Admin\\PemesananController::detail'], ['kd'], null, null, false, true, null]],
        63 => [[['_route' => 'pemesanan_bayar', '_controller' => 'App\\Controller\\Admin\\PemesananController::bayar'], ['kd'], null, null, false, true, null]],
        93 => [[['_route' => 'nota', '_controller' => 'App\\Controller\\KeranjangController::nota'], ['kd'], null, null, false, true, null]],
        114 => [[['_route' => 'cetak', '_controller' => 'App\\Controller\\KeranjangController::cetak'], ['kd'], null, null, false, true, null]],
        139 => [[['_route' => 'transfer', '_controller' => 'App\\Controller\\KeranjangController::transfer'], ['kd'], null, null, false, true, null]],
        171 => [
            [['_route' => 'produk_det', '_controller' => 'App\\Controller\\ProdukController::detail'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
