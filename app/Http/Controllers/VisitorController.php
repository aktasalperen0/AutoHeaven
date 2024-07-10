<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\MediaGallery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitorController extends Controller
{
    public function testTemplatePage(){
        return view('front.layouts.app');
    }

    public function indexPage(){
        return view('front.index');
    }

    public function aboutPage(){
        return view("front.about");
    }

    public function blogPage(){
        return view("front.blog");
    }

    public function blogDetailsPage(){
        return view("front.blog-details");
    }

    public function carDetailsPage($id){

        $car = Car::find($id);
        $user = User::find(Auth::id());

        $colors = [ " ", "Beyaz", "Siyah", "Gri", "Gümüş", "Mavi", "Kırmızı", "Diğer"];
        $guarantee = [" ","Var", "Yok"];
        $gearType = [" ", "Manuel", "Otomatik", "Yarı-Otomatik"];
        $fuelType = [" ", "Benzin", "Dizel", "LPG", "Elektrik"];

        $selectBoxValues = [$colors[$car->color], $guarantee[$car->guarantee], $gearType[$car->gear_type], $fuelType[$car->fuel_type]];

        return view("front.car-details", compact("car","user","selectBoxValues"));
    }

    public function carsPage(){
        return view("front.cars");
    }

    public function contactPage(){
        return view("front.contact");
    }

    public function faqPage(){
        return view("front.faq");
    }

    public function teamPage(){
        return view("front.team");
    }

    public function termsPage(){
        return view("front.terms");
    }

    public function testimonialsPage(){
        return view("front.testimonials");
    }
}
