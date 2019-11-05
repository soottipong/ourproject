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
$route['default_controller'] = 'dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Group Projects
$route['projects']                          = "projects/index";
$route['projects/add']                      = "projects/form";
$route['projectViews/(:any)']               = "projects/views/$1";
$route['projectCreate']['post']             = "projects/store";
$route['projects/edit/(:any)']                = "projects/edit/$1";
$route['ProjectBorelog/(:any)']             = "projects/addbore/$1";
$route['ProjectBorelogSave']['post']        = "projects/saveborelog";
$route['projectUpdate/(:any)']['put']       = "projects/update/$1";
$route['projectDelete/(:any)']['delete']    = "projects/delete/$1";
$route['borelogsViwes/(:any)']              = "projects/viewborelogs/$1";
$route['borelogsPrint/(:any)']              = "projects/printborelogs/$1";


//user Group
$route['user'] = "users/login";