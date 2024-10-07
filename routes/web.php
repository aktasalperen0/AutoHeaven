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

Route::get("/blog-details/{id}", [VisitorController::class, "blogDetailsPage"])->name("blog-details");

Route::get("/car-details/{id}", [VisitorController::class, "carDetailsPage"])->name("car-details");

Route::get("/cars", [VisitorController::class, "carsPage"])->name("cars");

Route::post("/filterCarsPost", [VisitorController::class, "filterCars"])->name("filterCars");

Route::get("/contact", [VisitorController::class, "contactPage"])->name("contact");

Route::get("/faq", [VisitorController::class, "faqPage"])->name("faq");

Route::get("/profile/{id}", [VisitorController::class, "profilePage"])->name("profile");

Route::get("/team", [VisitorController::class, "teamPage"])->name("team");

Route::get("/terms", [VisitorController::class, "termsPage"])->name("terms");

Route::get("/testimonials", [VisitorController::class, "testimonialsPage"])->name("testimonials");

//End Visitor Routes



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    //Dealer Routes

    Route::get('/myProfile', [DealerController::class, "myProfilePage"])->name('myProfile');

    Route::get("/editMyProfile", [DealerController::class, "editMyProfilePage"])->name('editMyProfile');

    Route::post("/editMyProfilePost", [DealerController::class, "editMyProfile"])->name('editMyProfilePost');

    Route::post("/deleteMyProfilePhotoPost", [DealerController::class, "deleteMyProfilePhoto"])->name('deleteMyProfilePhoto');

    Route::get("/sellCar", [DealerController::class, "sellCarPage"])->name("sellCar");

    Route::get("/sellCarModelFilter/{id}", [DealerController::class, "sellCarModelFilter"])->name("sellCarModelFilter");

    Route::post("/sellCarPost", [DealerController::class, "sellCar"])->name("sellCarPost");

    Route::get("/editCar/{id}", [DealerController::class, "editCarPage"])->name("editCar");

    Route::post("/editCarPost/{id}", [DealerController::class, "editCar"])->name("editCarPost");

    Route::post("/deleteCar", [DealerController::class, "deleteCar"])->name("deleteCar");

    Route::get("/writeBlog", [DealerController::class, "writeBlogPage"])->name("writeBlog");

    Route::post("/writeBlogPost", [DealerController::class, "writeBlog"])->name("writeBlogPost");

    Route::get("/editBlog/{id}", [DealerController::class, "editBlogPage"])->name("editBlog");

    Route::post("/editBlogPost/{id}", [DealerController::class, "editBlog"])->name("editBlogPost");

    Route::post("/deleteBlog", [DealerController::class, "deleteBlog"])->name("deleteBlog");

    //End Dealer Routes



    //Admin Routes

    Route::group(["prefix" => "admin", "middleware" => [isAdmin::class]], function (){

        Route::get("/", [AdminController::class, "adminPage"])->name("admin");

        Route::post("/getUser", [AdminController::class, "getUser"])->name("getUser");

        Route::post("/editUser", [AdminController::class, "editUser"])->name("editUser");

        Route::get("/cars", [AdminController::class, "carsPage"])->name("admin.cars");

        Route::post("/getCar", [AdminController::class, "getCar"])->name("getCar");

        Route::post("/editCar", [AdminController::class, "editCar"])->name("admin.editCar");

        Route::get("/addBrandModel", [AdminController::class, "addBrandModelPage"])->name("addBrandModel");

        Route::post("/addBrandModelPost", [AdminController::class, "addBrandModel"])->name("addBrandModelPost");

    });

    //End Admin Routes

});
