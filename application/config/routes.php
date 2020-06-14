<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'Cntlr_frontend';
$route['404_override'] = 'error404';
$route['translate_uri_dashes'] = FALSE;

/*
| -------------------------------------------------------------------------
| CLIENTPAGES
| -------------------------------------------------------------------------
*/

$route['webapp'] = 'Cntlr_frontend';
$route['webapp/page-berita'] = 'Cntlr_frontend/index';
$route['webapp/page-berita/(:any)'] = 'Cntlr_frontend/index/$1';
$route['webapp/login'] = 'Cntlr_frontend/login';
$route['webapp/registrasi'] = 'Cntlr_frontend/registrasi';
$route['webapp/logout'] = 'Cntlr_frontend/logout';

/*
| -------------------------------------------------------------------------
| ADMINPAGES
| -------------------------------------------------------------------------
*/

//---------------------  DASHBOARD
$route['dashboard'] = 'Cntlr_dashboard';


//---------------------  JURUSAN
$route['jurusan'] = 'Cntlr_jurusan';
$route['jurusan/list'] = 'Cntlr_jurusan/tampilData';
$route['jurusan/create'] = 'Cntlr_jurusan/simpanData';
$route['jurusan/delete'] = 'Cntlr_jurusan/hapusData';
$route['jurusan/update'] = 'Cntlr_jurusan/updateData';
$route['jurusan/change-status'] = 'Cntlr_jurusan/changeStatus';

//---------------------  SEKOLAH
$route['school'] = 'Cntlr_sekolah';
$route['school/list'] = 'Cntlr_sekolah/tampilData';
$route['school/update'] = 'Cntlr_sekolah/updateData';
$route['school/update-logo'] = 'Cntlr_sekolah/editLogo';

//---------------------  GELOMBANG
$route['gelombang'] = 'Cntlr_gelombang';
$route['gelombang/list'] = 'Cntlr_gelombang/tampilData';
$route['gelombang/create'] = 'Cntlr_gelombang/simpanData';
$route['gelombang/delete'] = 'Cntlr_gelombang/hapusData';
$route['gelombang/update'] = 'Cntlr_gelombang/updateData';
$route['gelombang/change-status'] = 'Cntlr_gelombang/changeStatus';

//---------------------  INFO PENDAFTARAN
$route['info-pendaftaran'] = 'Cntlr_infopendaftaran';
$route['info-pendaftaran/list'] = 'Cntlr_infopendaftaran/tampilData';
$route['info-pendaftaran/update'] = 'Cntlr_infopendaftaran/updateData';

//---------------------  INFO PENDAFTARAN
$route['berita'] = 'Cntlr_berita';
$route['berita/list'] = 'Cntlr_berita/tampilData';
$route['berita/create'] = 'Cntlr_berita/simpanData';
$route['berita/delete'] = 'Cntlr_berita/hapusData';
$route['berita/detail/(:any)'] = 'Cntlr_berita/detailData/$1';
$route['berita/edit/(:any)'] = 'Cntlr_berita/showUpdate/$1';
$route['berita/update/(:any)'] = 'Cntlr_berita/updateData/$1';

//---------------------  KONFIRMASI
$route['konfirmasi'] = 'Cntlr_konfirmasi';
$route['konfirmasi/create'] = 'Cntlr_konfirmasi/simpanData';
$route['konfirmasi/ganti-jurusan'] = 'Cntlr_konfirmasi/gantiJurusan';
$route['konfirmasi-pembayaran'] = 'Cntlr_konfirmasi/konfirmasiPembayaran';



$route['foo'] = 'Cntlr_foo/index';