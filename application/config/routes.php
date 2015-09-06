<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';

$route['(:any)_adventures/(:any)'] = 'adventure/index';