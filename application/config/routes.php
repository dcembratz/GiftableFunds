<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['admin/(:any)'] = 'pages_admin/page/$1';


$route['(:any)'] = 'pages_public/page/$1'; 



$route['default_controller'] = 'pages_public/page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
