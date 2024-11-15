<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*Route::get('/', function () {
    return view('welcome');
});*/


# Socialite URLs

// La page où on présente les liens de redirection vers les providers
Route::get('/home', [AuthController::class,'home'])->name('home'); 

Route::post('login', [AuthController::class,'login'])->name('login'); 
Route::get('loginRegister', [AuthController::class,'loginRegister'])->name('loginRegister'); 

// Route::get("login-register", "AuthController@loginRegister");

// La redirection vers le provider
Route::get('redirect/{provider}', [AuthController::class,'redirect'])->name('socialite_redirect'); 
// Le callback du provider
Route::get('callbck/{provider}', [AuthController::class,'callback']); 




Route::post('store', [AuthController::class,'store'])->name('store');

Route::get('dons', [AuthController::class,'dons'])->name('dons'); 
Route::post('dons/Payment', [AuthController::class,'donPayement'])->name('donPayement'); 

// Retour du payement
Route::get('dons/Payment/success', [AuthController::class,'on_success'])->name('on_success'); 
Route::get('payment/en_attente', [AuthController::class,'en_attente'])->name('en_attente'); 
Route::get('dons/Payment/failed', [AuthController::class,'on_failed'])->name('on_failed'); 

Route::post('payement_notif', [AuthController::class,'payement_notif'])->name('payement_notif'); 
Route::get('savePayement', [AuthController::class,'savePayement'])->name('savePayement'); 

Route::get('listDon', [AuthController::class,'listDon'])->name('listDon'); 


Route::get('apropos', [AuthController::class,'apropos'])->name('apropos'); 
Route::get('trainer', [AuthController::class,'trainer'])->name('trainer'); 
Route::get('gallery', [AuthController::class,'gallery'])->name('gallery'); 
Route::get('contact', [AuthController::class,'contact'])->name('contact'); 
/*
http://127.0.0.1:8000/dons/Payment/success?num_transaction_from_gu=1731500870100&num_command=1731500868784&amount=100&errorCode=202#payment-choice-anchor

http://127.0.0.1:8000/notif_success
http://127.0.0.1:8000/notif_failed
 http://127.0.0.1:8000/payement_notif

http://your_url_callback?payment_mode=INTOUCH_SERVICE_CODE&paid_sum=22200.0&paid_amount=22200.0&payment_token=1565251468191 &payment_status=200&command_number=14526&payment_validation_date=1565251499748 


http://localhost/site-etu-tp/public/savePayement?payment_mode=INTOUCH_SERVICE_CODE&paid_sum=22200.0&paid_amount=22200.0&payment_token=1565251468191 &payment_status=200&command_number=14526&payment_validation_date=1565251499748

http://localhost/site-etu-tp/public/getPayement
http://tpsfa.zdslab.ovh/getPayement

http://tpsfa.zdslab.ovh/savePayement?payment_mode=INTOUCH_SERVICE_CODE&paid_sum=22200.0&paid_amount=22200.0&payment_token=1565251468191 &payment_status=200&command_number=14526&payment_validation_date=1565251499748 

http://your_url_callback?
payment_mode=INTOUCH_SERVICE_CODE&
paid_sum=22200.0&
paid_amount=22200.0&
payment_token=1565251468191&
payment_status=200&
command_number=14526&
payment_validation_date=1565251499748 
*/