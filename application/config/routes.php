<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// LANDINGPAGE
$route['default_controller'] = 'landingpage';
$route['lowongan-kerja'] = 'landingpage/lowongan';
$route['detail-lowongan/(:num)'] = 'landingpage/detail_lowongan/$1';
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
$route['list-pelamar'] = 'kandidat/list_pelamar';
$route['detail-pelamar/(:num)'] = 'kandidat/detail_kandidat/$1';


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
$route['edit-soal-psikotes/(:num)'] = 'soalPsikotes/form_update/$1';
$route['update-soal-psikotes/(:num)'] = 'soalPsikotes/update/$1';

// ujian
$route['ujian-psikotes'] = 'ujianPsikotes/list_ujianPsikotes';
$route['edit-ujian/(:any)'] = 'ujianPsikotes/formEdit/$1';
$route['detail-ujian/(:any)'] = 'ujianPsikotes/detailujianPsikotes/$1';
$route['detail-ujian'] = 'ujianPsikotes/detailujianPsikotes';
// $route['ujian'] = 'ujianPsikotes/ujian'; 
$route['ujian/(:any)/(:any)'] = 'ujianPsikotes/ujian/$1/$2';  
$route['ujian'] = 'ujianPsikotes/ujian';  

// Hasil
$route['hasil-psikotes'] = 'ujianPsikotes/hasil'; 
$route['detail-hasil'] = 'ujianPsikotes/detail_hasil';
$route['detail-jawaban'] = 'ujianPsikotes/detail_jawaban';

$route['404_override'] = '';



