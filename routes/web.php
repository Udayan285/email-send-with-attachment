<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::get('send-email',[EmailController::class,'sendEmail']);

route::post('contact-form',[EmailController::class,'sendContactForm'])->name('sendMail');

route::get('contact',[EmailController::class,'showContact']);