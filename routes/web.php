<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\caregiverController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\partnerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\riderController;
use App\Http\Controllers\volunteerController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('rider_register','App\Http\Controllers\riderController@rider_register');
Route::post('rider_insert','App\Http\Controllers\riderController@insert');
Route::get('rider_login','App\Http\Controllers\riderController@rider_login');
Route::post('rider_log',[riderController::class,'rider_log']);
Route::get('rider_profile',[riderController::class,'profile']);
Route::get('rider_profile_Update',[riderController::class,'update']);
Route::post('rider_save',[riderController::class,'update_save']);
Route::post('delivered',[riderController::class,'delivered']);



Route::get('volunteer_register','App\Http\Controllers\volunteerController@volunteer_register');
Route::post('volunteer_insert','App\Http\Controllers\volunteerController@insert');
Route::get('volunteer_login','App\Http\Controllers\volunteerController@volunteer_login');
Route::post('volunteer_log',[volunteerController::class,'volunteer_log']);
Route::get('vounteer_profile',[volunteerController::class,'profile']);
Route::get('volunteer_profile_Update',[volunteerController::class,'update']);
Route::post('volunteer_save',[volunteerController::class,'update_save']);
Route::post('Accept_orderv',[volunteerController::class,'Accept_order']);
Route::post('Prepaedv',[volunteerController::class,'Prepaed']);
Route::post('Reject_orderv',[volunteerController::class,'Reject_order']);



Route::get('member_register','App\Http\Controllers\memberController@member_register');
Route::post('member_insert','App\Http\Controllers\memberController@insert');
Route::get('member_login','App\Http\Controllers\memberController@member_login');
Route::post('member_log',[memberController::class,'member_log']);
Route::get('member_profile',[memberController::class,'profile']);
Route::get('member_profile_Update',[memberController::class,'update']);
Route::post('update_save',[memberController::class,'update_save']);

//Admin  routes

Route::get('admin_login','App\Http\Controllers\adminController@admin_login');
Route::post('admin_log',[adminController::class,'admin_log']);
Route::get('admin_profile',[adminController::class,'profile']);
Route::get('caregivermanage',[adminController::class,'caregivermanage']);
Route::get('donormanage',[adminController::class,'donormanage']);
Route::get('memberManage',[adminController::class,'memberManage']);
Route::get('menumanage',[adminController::class,'menumanage']);
Route::get('partnermanage',[adminController::class,'partnermanage']);
Route::get('ridermanage',[adminController::class,'ridermanage']);
Route::get('volunteermanage',[adminController::class,'volunteermanage']);
//Route::post('Reject_order','App\Http\Controllers\adminController@Reject_order');
//Route::post('Prepaed','App\Http\Controllers\adminController@Prepaed');
//Route::post('Accept_order','App\Http\Controllers\adminController@Accept_order');
Route::post('Accept_order',[adminController::class,'Accept_order']);
Route::post('Prepaed',[adminController::class,'Prepaed']);
Route::post('Reject_order',[adminController::class,'Reject_order']);
Route::post('update_menu','App\Http\Controllers\adminController@update_menu');
Route::post('menue_available',[adminController::class,'menue_available']);
Route::post('menue_notavailable',[adminController::class,'menue_notavailable']);
Route::post('member_active',[adminController::class,'member_active']);
Route::post('member_deactivate',[adminController::class,'member_deactivate']);
Route::post('member_edit',[adminController::class,'member_edit']);
Route::post('caregiver_active',[adminController::class,'caregiver_active']);
Route::post('caregiver_deactivate',[adminController::class,'caregiver_deactivate']);
Route::post('partner_active',[adminController::class,'partner_active']);
Route::post('partner_deactivate',[adminController::class,'partner_deactivate']);
Route::post('rider_active',[adminController::class,'rider_active']);
Route::post('rider_deactivate',[adminController::class,'rider_deactivate']);
Route::post('volunteer_active',[adminController::class,'volunteer_active']);
Route::post('volunteer_deactivate',[adminController::class,'volunteer_deactivate']);

//partner routes

Route::get('partner_register','App\Http\Controllers\partnerController@partner_register');
Route::post('partner_insert','App\Http\Controllers\partnerController@insert');
Route::get('partner_login','App\Http\Controllers\partnerController@partner_login');
Route::post('partner_log',[partnerController::class,'partner_log']);
Route::get('partner_profile',[partnerController::class,'profile']);
Route::get('partner_profile_Update',[partnerController::class,'update']);
Route::post('partner_save',[partnerrController::class,'update_save']);
Route::post('update_menup','App\Http\Controllers\partnerController@update_menup');
Route::post('menu_insertp','App\Http\Controllers\partnerController@insertp');
Route::post('Accept_orderp',[partnerController::class,'Accept_order']);
Route::post('Prepaedp',[partnerController::class,'Prepaed']);
Route::post('Reject_orderp',[partnerController::class,'Reject_order']);



Route::get('caregiver_register','App\Http\Controllers\caregiverController@caregiver_register');
Route::post('caregiver_insert','App\Http\Controllers\caregiverController@insert');
Route::get('caregiver_login','App\Http\Controllers\caregiverController@caregiver_login');
Route::post('caregiver_log',[caregiverController::class,'caregiver_log']);
Route::get('caregiver_profile',[caregiverController::class,'profile']);
Route::get('caregiver_profile_Update',[caregiverController::class,'update']);
Route::post('update_save',[caregiverController::class,'update_save']);
Route::get('orderc',[caregiverController::class,'order_page']);
Route::post('place_order',[caregiverController::class,'place_order']);



Route::get('add_menu','App\Http\Controllers\adminController@add_menu');
Route::post('menu_insert','App\Http\Controllers\menuController@insert');
Route::get('view_menu','App\Http\Controllers\menuController@view_menu');
Route::get('orderm',[memberController::class,'order']);

Route::get('forgotpassword','App\Http\Controllers\menuController@forgotpassword');
Route::get('doner','App\Http\Controllers\menuController@doner');



