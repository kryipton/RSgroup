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
$route['default_controller'] = 'materic';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//====================================================================================================================================
//===============================================Admin Hissesi========================================================================

//----------------------------------------------Login-----------------------------------------------------------------------------

//login seyfesi
$route["ocean_secure_login_page"] = "Ocean/index";

//login prosesinin yerine yetirilmesi
$route["ocean_secure_login_page_act"] = "Ocean/ocean_login_secure_act";

//logout prosesinin yerine yetirilmesi
$route["ocean_secure_logout_page_act"] = "Ocean/ocean_logout_secure_act";

//----------------------------------------------Login-----------------------------------------------------------------------------



//----------------------------------------------Dashboard-----------------------------------------------------------------------------

//dashboard
$route["admin_home"] = "Ocean/dashboard";

//ana seyfeye sekil elave edilmesi
$route["ocean_admin_dashboard_brend_add"] = "Ocean/ocean_admin_dashboard_brend_add";

//galereyadaki tablenin yeniden refreh olmasei
$route["ocean_refresh_image_list_home"] = "Ocean/ocean_refresh_image_list_home";

//home daki sekilin silinmeis
$route["ocean_delete_picture_of_home/(.*)"] = "Ocean/ocean_delete_picture_of_home/$1";

//galereyadaki birden cox seklin silinmesi
$route["delete_selected_element_home"] = "Ocean/delete_selected_element_home";


//----------------------------------------------Dashboard-----------------------------------------------------------------------------






//----------------------------------------------Galereya-----------------------------------------------------------------------------

//galereya
$route["admin_gallery"] = "Ocean/gallery";

//galereyaya sekil elave edilmesi
$route["admin_gallery_add"] = "Ocean/gallery_add";

//galereyadaki sekilin statusunun deyisirilmesi
$route["change_status/(.*)"] = "Ocean/change_status/$1";

//galereyadaki tablenin yeniden refreh olmasei
$route["refresh_image_list_gallery"] = "Ocean/refresh_image_list_gallery";

//galereyadaki sekilin silinmeis
$route["delete_picture_of_gallery/(.*)"] = "Ocean/delete_picture_of_gallery/$1";

//galereyadaki sekilin sirasinin deyisikliyi
$route["change_rank_gallery"] = "Ocean/change_rank_gallery";

//galereyadaki birden cox seklin silinmesi
$route["delete_selected_element_gallery"] = "Ocean/delete_selected_element_gallery";

//----------------------------------------------Galereya-----------------------------------------------------------------------------






//----------------------------------------------About-----------------------------------------------------------------------------

//about hissesinin ana seyfesi
$route["admin_about"] = "Ocean/admin_about";

//about hissesinin editorunun sekil uploadi
$route["admin_about_image_upload"] = "Ocean/admin_about_image_upload";

//about hissesinin update
$route["admin_about_update"] = "Ocean/admin_about_update";

//----------------------------------------------About-----------------------------------------------------------------------------





//----------------------------------------------Elaqe-----------------------------------------------------------------------------

//contact hissesinin ana seyfesi
$route["admin_contact"] = "Ocean/admin_contact";

//contact hissesinin editorunun sekil uploadi
$route["admin_contact"] = "Ocean/admin_contact";

//contacthissesinin update
$route["admin_contact_update"] = "Ocean/admin_contact_update";

//----------------------------------------------Elaqe-----------------------------------------------------------------------------




//----------------------------------------------Sertificatlar-----------------------------------------------------------------------------

//sertifikatlar hissesinin ana seyfesi
$route["admin_certificates"] = "Ocean/admin_certificates";

//sertifikatlar hissesinin haqqinda hissesi duzenleme
$route["admin_certificates_update"] = "Ocean/admin_certificates_update";


//sertifikatlar hissesinin sekillerini elave etme
$route["admin_certificates_add"] = "Ocean/admin_certificates_add";

//sertifikatlar hissesinin sekillerini elave etme
$route["refresh_image_list_certificates"] = "Ocean/refresh_image_list_certificates";

//sertifikatlardaki sekilin silinmesi
$route["delete_picture_of_certificates/(.*)"] = "Ocean/delete_picture_of_certificates/$1";

//galereyadaki sekilin statusunun deyisirilmesi
$route["change_status_certificates/(.*)"] = "Ocean/change_status_certificates/$1";

//galereyadaki birden cox seklin silinmesi
$route["delete_selected_element_certificates"] = "Ocean/delete_selected_element_certificates";


//galereyadaki sekilin sirasinin deyisikliyi
$route["change_rank_certificates"] = "Ocean/change_rank_certificates";

//----------------------------------------------Sertificatlar-----------------------------------------------------------------------------



//----------------------------------------------Xidmetler-----------------------------------------------------------------------------

//xidmetler hissesinin linki
$route["ocean_services"] = "Ocean/ocean_services";

//yeni xidmetler hissesinin elave edilmesi
$route["ocean_add_new_services"] = "Ocean/ocean_add_new_services";

//yeni xidmetler hissesinin elave edilmesi prosesi
$route["ocean_add_new_services_act"] = "Ocean/ocean_add_new_services_act";

//xidmetlerin adlarinin deyisikliyi
$route["change_name_ocean_services/(.*)"] = "Ocean/change_name_ocean_services/$1";

//xidmetlerin adlarinin deyisikliyinin edilmesi
$route["change_name_ocean_services_act/(.*)"] = "Ocean/change_name_ocean_services_act/$1";

//xidmetlerin adlarinin deyisikliyinin edilmesi
$route["delete_name_ocean_services/(.*)"] = "Ocean/delete_name_ocean_services/$1";

//xidmetlerin haqqinda hissesi
$route["about_ocean_services/(.*)"] = "Ocean/about_ocean_services/$1";

//xidmetlerin haqqinda hissesinin yenilenmesi
$route["about_ocean_services_update/(.*)"] = "Ocean/about_ocean_services_update/$1";

//----------------------------------------------Xidmetler-----------------------------------------------------------------------------



//----------------------------------------------Portfolio-----------------------------------------------------------------------------

//portfolio hissesinin linki
$route["ocean_portfolio"] = "Ocean/ocean_portfolio";

//portfolio hissesinin silinmesi
$route["ocean_delete_portfolio/(.*)"] = "Ocean/ocean_delete_portfolio/$1";

//portfolio hissesine yenisini elave etme
$route["ocean_portfolio_add_new"] = "Ocean/ocean_portfolio_add_new";

//portfolio hissesine yenisini elave etmesi prosesi
$route["ocean_portfolio_add_new_act"] = "Ocean/ocean_portfolio_add_new_act";

//portfolio hissesini yenileme
$route["ocean_portfolio_update_new/(.*)"] = "Ocean/ocean_portfolio_update_new/$1";

//portfolio hissesini yenileme prosesi
$route["ocean_portfolio_update_new_act/(.*)"] = "Ocean/ocean_portfolio_update_new_act/$1";

//portfolio hissesinin galereya hissesi
$route["portfolio_about_gallery/(.*)"] = "Ocean/portfolio_about_gallery/$1";

//portfolio hissesinin galereya hissesinde sekilin silimesi
//$route["ocean_portfolio_gallery/(.*)"] = "Ocean/ocean_portfolio_gallery/$1";

//portfolio hissesinin galereya hissesine yeni seklin elave olunmasi
$route["ocean_portfolio_add_gallery/(.*)"] = "Ocean/portfolio_gallery_add/$1";

//portfolio hissesinin galereya hissesine yeni seklin elave olunmasi zamani divin yeniden refresh olmasi
$route["ocean_refresh_image_list_portfolio/(.*)"] = "Ocean/refresh_image_list_portfolio/$1";

//portfolio hissesinin galereyasinda sekili silme
$route["ocean_delete_image_portfolio/(.*)"] = "Ocean/ocean_delete_image_portfolio/$1";

//portfolio hissesinin galereyasinda sekili toplu silme
$route["ocean_delete_image_portfolio_group/(.*)"] = "Ocean/ocean_delete_image_portfolio_group/$1";

//portfolio hissesinin galereyasinda sekili toplu silme
$route["ocean_change_status_image_portfolio/(.*)"] = "Ocean/ocean_change_status_image_portfolio/$1";

//portfolio hissesinin galereyasinda sekili toplu silme
$route["ocean_change_primary_image_portfolio/(.*)"] = "Ocean/ocean_change_primary_image_portfolio/$1";


//----------------------------------------------Portfolio-----------------------------------------------------------------------------





//===============================================Admin Hissesi========================================================================
//====================================================================================================================================





//===============================================Front Hissesi========================================================================

//----------------------------------------------------Ana sehife---------------------------------------
$route['(:any)/home'] =  'Materic/index';

//----------------------------------------------------Haqqimizda---------------------------------------
$route['(:any)/about'] = 'Materic/about';
//----------------------------------------------------Gallery---------------------------------------
$route['(:any)/galery'] = 'Materic/galery';
$route['(:any)/galery/(.*)'] = 'Materic/galery/$1';
//----------------------------------------------------Elaqe---------------------------------------
$route['(:any)/contact'] = 'Materic/contact';


//----------------------------------------------------Sertifikatlar---------------------------------------
$route['(:any)/certificates'] = 'Materic/certificates';

//----------------------------------------------------Sertifikatlar---------------------------------------
$route['(:any)/portfolio'] = 'Materic/portfolio';

//----------------------------------------------------Sertifikatlar---------------------------------------
$route['(:any)/portfolio_single/(.*)'] = 'Materic/portfolio_single/$1/$2';

//----------------------------------------------------Sertfikatlar---------------------------------------
$route['(:any)/certificates'] = 'Materic/certificates';

//----------------------------------------------------Services---------------------------------------


$route['(:any)/service/(.*)'] = 'Materic/single_service/$2/$1';








//================================================Front Hissesi===============================================================================