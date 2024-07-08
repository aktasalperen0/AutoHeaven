<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function profilePage()
    {
        return view('front.dealer.profile');
    }
    public function sellCarPage()
    {
        return view('front.dealer.sellCar');
    }
}
