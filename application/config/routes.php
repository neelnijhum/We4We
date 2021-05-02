<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
$route['home']='Welcome/index';
$route['about']='Welcome/about';
$route['contact']='Welcome/contact';
$route['donators']='Welcome/donators';
$route['donation']='Welcome/donation';
$route['login']='Welcome/login';
$route['signup']='Welcome/signup';