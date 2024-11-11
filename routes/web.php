<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\PreventBackHistoryMiddleware;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactUsController;

Route::get('/', function () {
    return redirect()->route('admin.login');
})->name('home');

// ======================= Frontend
Route::group(['prefix'=> '', 'middleware'=>[PreventBackHistoryMiddleware::class]],function(){

    // ==== Home
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // ==== Arvos
    Route::get('/arvos', [HomeController::class, 'arvos'])->name('arvos');

    // ==== RSB
    Route::get('/rsb', [HomeController::class, 'rsb'])->name('rsb');

    // ==== About us
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    // ==== Contact us
    Route::get('/contact-us', [ContactUsController::class, 'contact'])->name('contact');

    // ==== Send Mail enquiry_id
    Route::post('/send-mail', [ContactUsController::class, 'sendMail'])->name('send-mail');

    // ===== Comming Soon
    Route::get('/comming-soon', [HomeController::class, 'commingSoon'])->name('comming-soon');

});
