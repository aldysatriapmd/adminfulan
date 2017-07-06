<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'A_login';
$route['404_override'] = 'C_halaman_tambahan';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'A_login';
$route['login/proses'] = 'A_login/cek_login';
$route['akses/keluar'] = 'A_login/keluar';

$route['dashboard'] = 'A_dashboard';
$route['dashboard/daftar-buku'] = 'A_daftar_buku';
$route['dashboard/peminjaman'] = 'A_peminjaman';
$route['dashboard/keanggotaan'] = 'A_keanggotaan';
$route['dashboard/keanggotaan/input'] = 'A_keanggotaan/view_input_keanggotaan';
$route['dashboard/keanggotaan/edit/:num'] = 'A_keanggotaan/view_edit_keanggotaan';

$route['dashboard/keterlambatan'] = 'A_keterlambatan';
$route['dashboard/user'] = 'A_user';
$route['dashboard/user/input'] = 'A_user/view_input_user';
$route['dashboard/user/edit/:num'] = 'A_user/view_edit_user';

$route['dashboard/sejarah-peminjaman']='A_sejarah';

$route['dashboard/profil']='C_halaman_tambahan/view_edit_profil';
$route['dashboard/laporan']='A_laporan/view_ui_laporan';
$route['dashboard/laporan/harian']='A_laporan';
$route['dashboard/laporan/mingguan']='A_laporan/laporan_mingguan';

