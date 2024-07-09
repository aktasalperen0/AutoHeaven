<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\VisitorController;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;

//Visitor Routes

Route::get("/testTemplate", [VisitorController::class, "testTemplatePage"])->name("app");

Route::get('/', [VisitorController::class, "indexPage"])->name("index");

Route::get("/about", [VisitorController::class, "aboutPage"])->name("about");

Route::get("/blog", [VisitorController::class, "blogPage"])->name("blog");

Route::get("/blog-details", [VisitorController::class, "blogDetailsPage"])->name("blog-details");

Route::get("/car-details", [VisitorController::class, "carDetailsPage"])->name("car-details");

Route::get("/cars", [VisitorController::class, "carsPage"])->name("cars");

Route::get("/contact", [VisitorController::class, "contactPage"])->name("contact");

Route::get("/faq", [VisitorController::class, "faqPage"])->name("faq");

Route::get("/team", [VisitorController::class, "teamPage"])->name("team");

Route::get("/terms", [VisitorController::class, "termsPage"])->name("terms");

Route::get("/testimonials", [VisitorController::class, "testimonialsPage"])->name("testimonials");

//End Visitor Routes



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    //Dealer Routes

    Route::get('/profile', [DealerController::class, "profilePage"])->name('profile');

    Route::get("/sellCar", [DealerController::class, "sellCarPage"])->name("sellCar");

    //End Dealer Routes



    //Admin Routes

    Route::group(["prefix" => "admin", "middleware" => [isAdmin::class]], function (){

        Route::get("/addBrandModel", [AdminController::class, "addBrandModelPage"])->name("addBrandModel");

        Route::post("/addBrandModelPost", [AdminController::class, "addBrandModel"])->name("addBrandModelPost");
    });

    //End Admin Routes

});
