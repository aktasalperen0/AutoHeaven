<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function carDetailsPage(){
        return view("front.car-details");
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
