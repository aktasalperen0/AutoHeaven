<?php

use Illuminate\Support\Facades\Route;

//Route'lar test amaçlı function kullanıyor. Controller'a geçiş yapılacak.

Route::get("/testTemplate", function (){
    return view("front.layouts.app");
})->name("app");

Route::get('/', function () {
    return view('front.index');
})->name("index");

Route::get("/about", function (){
    return view("front.about");
})->name("about");

Route::get("/blog", function (){
    return view("front.blog");
})->name("blog");

Route::get("/blog-details", function (){
    return view("front.blog-details");
})->name("blog-details");

Route::get("/car-details", function (){
    return view("front.car-details");
})->name("car-details");

Route::get("/cars", function (){
    return view("front.cars");
})->name("cars");

Route::get("/contact", function (){
    return view("front.contact");
})->name("contact");

Route::get("/faq", function (){
    return view("front.faq");
})->name("faq");

Route::get("/team", function (){
    return view("front.team");
})->name("team");

Route::get("/terms", function (){
    return view("front.terms");
})->name("terms");

Route::get("/testimonials", function (){
    return view("front.testimonials");
})->name("testimonials");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
