<?php

use Illuminate\Support\Facades\Route;

//Route'lar test amaçlı function kullanıyor. Controller'a geçiş yapılacak.

Route::get("/testTemplate", function (){
    return view("front.layouts.app");
});

Route::get("/about", function (){
    return view("front.about");
});

Route::get("/blog", function (){
    return view("front.blog");
});

Route::get("/blog-details", function (){
    return view("front.blog-details");
});

Route::get("/car-details", function (){
    return view("front.car-details");
});

Route::get("/cars", function (){
    return view("front.cars");
});

Route::get("/contact", function (){
    return view("front.contact");
});

Route::get("/faq", function (){
    return view("front.faq");
});

Route::get("/index", function (){
    return view("front.index");
});

Route::get("/team", function (){
    return view("front.team");
});

Route::get("/terms", function (){
    return view("front.terms");
});

Route::get("/testimonials", function (){
    return view("front.testimonials");
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
