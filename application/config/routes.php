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

$route['106a6c241b8797f52e1e77317b96a201'] = "home";
$route['106a6c241b8797f52e1e77317b96a201/([a-zA-Z0-9]+)'] = "home/$1";

$route['ee11cbb19052e40b07aac0ca060c23ee'] = "user";
$route['ee11cbb19052e40b07aac0ca060c23ee/([a-zA-Z0-9]+)'] = "user/$1";

$route['d13bc5b68b2bd9e18f29777db17cc563'] = "Common";
$route['d13bc5b68b2bd9e18f29777db17cc563/([a-zA-Z0-9]+)'] = "Common/$1";

$route['4034948be723a6230879e1724ed2711b/'] = "SettingFile";
$route['4034948be723a6230879e1724ed2711b/([a-zA-Z0-9]+)'] = "SettingFile/$1";

$route['fd69c5cf902969e6fb71d043085ddee6/'] = "Results";
$route['fd69c5cf902969e6fb71d043085ddee6/([a-zA-Z0-9]+)'] = "Results/$1";

$route['1cbecbfeea9f85d98ffcbf7e88ab4f6c/'] = "TankContainer";
$route['1cbecbfeea9f85d98ffcbf7e88ab4f6c/([a-zA-Z0-9]+)'] = "TankContainer/$1";