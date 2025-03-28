<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// LANDINGPAGE
$route['default_controller'] = 'landingpage';
$route['lowongan-kerja'] = 'landingpage/lowongan';
$route['detail-lowongan'] = 'landingpage/detail_lowongan';
$route['pertanyaan-umum'] = 'landingpage/pertanyaan_umum';

//LOGIN 
$route['login'] = 'auth/login';
$route['login/lupa-password'] = 'auth/forgotPassword';
$route['login/reset-password/(:any)'] = 'auth/resetpassword/$1';

//LOGOUT
$route['logout'] = 'auth/logout';

// PELAMAR
$route['login/user'] = 'auth/login';
$route['halaman-pelamar'] = 'user/dashboardUser';
$route['Biodata'] = 'kandidat/biodata';

// ADMIN
$route['halaman-admin'] = 'user/dashboardAdmin';
$route['list-lowongan'] = 'lowongan/list_lowongan';
$route['list-faq'] = 'faq/list_faq';

// PSIKOTES
$route['psikotes-online'] = 'ujianPsikotes/data_psikotes';

// kategori
$route['kategori-psikotes'] = 'kategoriPsikotes/list_kategoriPsikotes';
// soal
$route['soal-psikotes'] = 'soalPsikotes/list_soalPsikotes';
// ujian
$route['ujian-psikotes'] = 'ujianPsikotes/list_ujianPsikotes';
$route['detail-ujian/(:any)'] = 'ujianPsikotes/detailujianPsikotes/$1';
$route['detail-ujian'] = 'ujianPsikotes/detailujianPsikotes';
// $route['ujian'] = 'ujianPsikotes/ujian'; 
$route['ujian/(:any)/(:any)'] = 'ujianPsikotes/ujian/$1/$2';  
$route['ujian'] = 'ujianPsikotes/ujian';  

$route['404_override'] = '';



