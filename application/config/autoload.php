<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'session', 'form_validation', 'parser', 'ion_auth', 'image_lib', 'email', 'rb');

$autoload['helper'] = array('form', 'url', 'html', 'smiley', 'holidaysrating');

$autoload['config'] = array('holidaysrating');

$autoload['language'] = array();

$autoload['model'] = array('Ion_auth_model', 'Picture_model', 'User_model');

/* End of file autoload.php */
/* Location: ./application/config/autoload.php */