<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



$route['default_controller'] = 'users/login';


$route['register'] = 'users/reg';


$route['profile'] = 'Users/profile';


$route['logout'] = 'users/logout';


$route['do/register'] = 'users/process';

$route['login'] = 'users/log';

$route['do/loginprocess'] = 'users/loginprocess';

$route['userlist'] = 'users/allusers';
