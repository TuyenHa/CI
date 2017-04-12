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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['danh-muc/(:any)/(:num)'] = 'viewcategory/index/$1';
$route['san-pham/(:num)\.html'] = 'home/view/$2';
$route['gio-hang\.html'] = 'cart';
$route['gio-hang/mua-hang/(:num)\.html'] = 'cart/addcart/$1';
$route['gio-hang/xoa-hang/(:num)\.html'] = 'cart/del/$1';
$route['gio-hang/xoa-het\.html'] = 'cart/emptycart';
$route['tim-kiem\.html']='search/index';
$route['admincp\.html']='admincp/index';
$route['admincp/logout\.html']='admincp/index/logout';
$route['dang-nhap\.html']='login/index';
$route['dang-ki-tai-khoan\.html']='register/index';
$route['thong-tin-tai-khoan/(:num)\.html']='infouser/index/$1';
$route['doi-mat-khau/(:num)\.html']='changpass/index/$1';
$route['dang-xuat\.html']='logout/index';
$route['thanh-toan\.html']='pay/index';



