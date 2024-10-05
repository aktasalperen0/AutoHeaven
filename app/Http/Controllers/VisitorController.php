<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VisitorController extends Controller
{
    public function testTemplatePage(){
        return view('front.layouts.app');
    }

    public function indexPage(){
        $cars = Car::orderBy("price", "desc")->get();
        $blogs = Blog::orderBy("updated_at")->paginate(3);

        $gearTypes = [" ", "Manuel", "Otomatik", "Yarı-Otomatik"];

        return view("front.index", compact("cars", "blogs", "gearTypes"));
    }

    public function aboutPage(){
        return view("front.about");
    }

    public function blogPage(){

        $blogs = Blog::orderBy("updated_at", "desc")->paginate(5);

        return view("front.blog", compact("blogs"));
    }

    public function blogDetailsPage($id){

        $blog = Blog::find($id);

        if(!$blog){
            abort(404);
        }

        return view("front.blog-details", compact("blog"));
    }

    public function carDetailsPage($id){

        $car = Car::find($id);

        if(!$car){
            abort(404);
        }

        $user = $car->getUsers;

        $colors = [ " ", "Beyaz", "Siyah", "Gri", "Gümüş", "Mavi", "Kırmızı", "Diğer"];
        $guarantee = [" ","Var", "Yok"];
        $gearType = [" ", "Manuel", "Otomatik", "Yarı-Otomatik"];
        $fuelType = [" ", "Benzin", "Dizel", "LPG", "Elektrik"];

        $selectBoxValues = [$colors[$car->color], $guarantee[$car->guarantee], $gearType[$car->gear_type], $fuelType[$car->fuel_type]];

        return view("front.car-details", compact("car","user","selectBoxValues"));
    }

    public function carsPage(){

        $cars = Car::paginate(15);
        $gearTypes = [" ", "Manuel", "Otomatik", "Yarı-Otomatik"];

        $carBrands = CarBrand::all();

        return view("front.cars", compact("cars", "gearTypes", "carBrands"));
    }

    public function filterCars(Request $request){
        $carsQuery = Car::with('getModels.getBrands');
        $gearTypes = [" ", "Manuel", "Otomatik", "Yarı-Otomatik"];

        if ($request->filled('brand') && $request->get('brand') != 0) {
            $carsQuery->whereHas('getModels.getBrands', function ($query) use ($request) {
                $query->where('id', $request->brand);
            });
        }

        if ($request->filled('yearStart') && $request->yearStart != 0) {
            $carsQuery->where('year', '>=', $request->yearStart);
        }

        if ($request->filled('yearEnd') && $request->yearEnd != 0) {
            $carsQuery->where('year', '<=', $request->yearEnd);
        }

        if ($request->filled('color') && $request->color != 0) {
            $carsQuery->where('color', $request->color);
        }

        if ($request->filled('kmStart') && $request->kmStart != 0) {
            $carsQuery->where('km', '>=', $request->kmStart);
        }

        if ($request->filled('kmEnd') && $request->kmEnd != 0) {
            $carsQuery->where('km', '<=', $request->kmEnd);
        }

        if ($request->filled('guarantee') && $request->guarantee != 0) {
            $carsQuery->where('guarantee', $request->guarantee);
        }

        if ($request->filled('gearType') && $request->gearType != 0) {
            $carsQuery->where('gear_type', $request->gearType);
        }

        if ($request->filled('fuelType') && $request->fuelType != 0) {
            $carsQuery->where('fuel_type', $request->fuelType);
        }

        if ($request->filled('priceStart') && $request->priceStart != 0) {
            $carsQuery->where('price', '>=', $request->priceStart);
        }

        if ($request->filled('priceEnd') && $request->priceEnd != 0) {
            $carsQuery->where('price', '<=', $request->priceEnd);
        }

        $cars = $carsQuery->paginate(15);

        return response()->json([
            'success' => true,
            'cars' => $cars->items(),
            'gearTypes' => $gearTypes,
            'pagination' => [
                'previousPageUrl' => $cars->previousPageUrl(),
                'nextPageUrl' => $cars->nextPageUrl(),
                'lastPage' => $cars->lastPage(),
                'currentPage' => $cars->currentPage(),
                'url' => $cars->url(1)
            ]
        ]);
    }

    public function contactPage(){
        return view("front.contact");
    }

    public function faqPage(){
        return view("front.faq");
    }

    public function profilePage($id){
        $user = User::find($id);

        if(!$user){
            abort(404);
        }

        $cars = Car::where('user_id', $id)->get();
        $blogs = Blog::where('user_id', $id)->get();

        $gearTypes = ["", "Manuel", "Otomatik", "Yarı-Otomatik"];

        if($id == Auth::id()){
            return view("front.dealer.myProfile", compact("id", "user", "cars", "blogs", "gearTypes"));
        }

        return view("front.profile", compact("id", "user", "cars", "blogs", "gearTypes"));
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
