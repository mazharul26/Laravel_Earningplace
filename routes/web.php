<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

//Route::get('/', function () {
//    return view('master');
//});

$data = array(
    '/' => 'FiverMasterController',
     '/' => 'FiverMasterController',
    'fiver_about' => 'FiverMasterController',
    'fiver_news' => 'FiverMasterController',
    'fiver_contact' => 'FiverMasterController',
    'fiver_status' => 'FiverMasterController',
    'fiver_gellary' => 'FiverMasterController',
);

###########chat and friends Controller###############

//Route::get('/friends', "FriendController@index")->middleware('auth');

Route::get('/chat', 'ChatController@index')->middleware('auth')->name('fiver_friend');
Route::get('/chat/{id}', 'ChatController@show')->middleware('auth')->name('fiver_show');
Route::post('/chat/getChat/{id}', 'ChatController@getChat')->middleware('auth');
Route::post('/chat/sendChat', 'ChatController@sendChat')->middleware('auth');



foreach ($data as $key => $value) {
    Route::get("$key", "$value@about");
    Route::get("$key", "$value@news");
    Route::get("$key", "$value@contact");
    Route::get("$key", "$value@status");
    Route::get("$key", "$value@gellary");
    Route::get("$key", "$value@slider");
    Route::get("$key", "$value@index");
}
###########=====Master---Page--Controller---Route-Information====###########

Route::get('/fiver_gellary', "FiverMasterController@gellary");
Route::get('/fiver_contact', "FiverMasterController@contact");
Route::get('/fiver_about', "FiverMasterController@about");
Route::get('/fiver_status', "FiverMasterController@status");

Route::get('/', "FiverMasterController@freelancerplace");

//Route::get('/', "FiverMasterController@slider");

//Route::get('/', "FiverMasterController@slider");
//Route::get('/index', function () {
//    return view('deshboard');
//});
//
//
//Route::get('/index', "DeshboardController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@general');
Route::get('/fiver_details/{id}', 'HomeController@details');
Route::get('/fiver_gigs_views_me', 'HomeController@gigs_view');
#####-----Profile---Controller--#####


Route::get('/profile', 'ProfileController@index');

############-----Gig---Controller--#####

Route::get('/fiver_gigs', 'FiverGigsController@index');
Route::post('/fiver_gigs', 'FiverGigsController@insert')->name('gigs');


############-----Gig--prissing-Controller--#####
Route::get('/fiver_gigs_prissing', 'FiverGigsPrissingController@index');
Route::post('/fiver_gigs_prissing', 'FiverGigsPrissingController@insert');




############-----Seller-Post---Controller--#####

Route::get('/fiver_seller_post', 'FiverSellerController@index');
Route::get('/fiver_buyer_request', 'FiverSellerController@view');
Route::post('/fiver_seller_post', 'FiverSellerController@insert');

#####-----Fiverr--category---Controller--#####

Route::get('/fiver_category', 'Fiverr_categoryController@index');
Route::post('fiver_category', 'Fiverr_categoryController@insert');
Route::get('fiver_category', 'Fiverr_categoryController@view');


############### fiver subcategory Controller  ##################
Route::get('/fiver_subcategory', 'FiverSubcategoryController@index');

Route::post('fiver_subcategory', 'FiverSubcategoryController@insert');

//Route::get('fiver_subcategory', 'FiverSubcategoryController@view');
############### fiver Service type Controller  ##################
Route::get('/fiver_service', 'FiverServicetypeController@index');
Route::post('fiver_service', 'FiverServicetypeController@insert');


############### fiver Gigmetadata  Controller  ##################

Route::get('/fiver_gigmetadata', 'fiver_BigmetadateController@index');
Route::post('fiver_gigmetadata', 'fiver_BigmetadateController@insert');




############### fiver SearchTags  Controller  ##################

Route::get('/fiver_searchtags', 'FiverSearchtagsController@index');
Route::post('fiver_searchtags', 'FiverSearchtagsController@insert');
Route::get('fiver_searchtags', 'FiverSearchtagsController@view');

############### fiver Delivery duration  Controller  ##################

Route::get('/fiver_delivery_duration', 'FiverDeliveryDurationController@index');
Route::post('fiver_delivery_duration', 'FiverDeliveryDurationController@insert');
Route::get('fiver_delivery_duration', 'FiverDeliveryDurationController@view');



############### fiver Revition duration  Controller  ##################

Route::get('/fiver_revision', 'FiverRevisionController@index');
Route::post('fiver_revision', 'FiverRevisionController@insert');
Route::get('fiver_revision', 'FiverRevisionController@view');


############### fiver Project  Ending duration  Controller  ##################

Route::get('/fiver_project_work', 'FiverProjectWorkDurationController@index');
Route::post('fiver_project_work', 'FiverProjectWorkDurationController@insert');
Route::get('fiver_project_work', 'FiverProjectWorkDurationController@view');

############### fiver Product  Type   Controller  ##################

Route::get('/fiver_product_type', 'FiverProductTypeController@index');
Route::post('fiver_product_type', 'FiverProductTypeController@insert');
//Route::get('fiver_product_type','FiverProductTypeController@view');
######----Facebook---LoGin rout____infomation##########


Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');


##################### Paypal ###########################
Route::get('paypal', "PaymentController@index");
Route::post('paypal', 'PaymentController@payWithpaypal');
Route::get('/status', 'PaymentController@getPaymentStatus');
