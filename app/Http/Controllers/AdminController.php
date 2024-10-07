<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarDamage;
use App\Models\CarModel;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function adminPage(){

        $users = User::withTrashed()->get();

        return view('front.admin.admin', compact('users'));
    }

    public function getUser(Request $request){
        $user = User::withTrashed()->find($request->user_id);

        if ($user) {
            return response()->json([
                'success' => true,
                'id' => $user->id,
                'name' => $user->name,
                'surname' => $user->surname,
                'email' => $user->email,
                'phone' => $user->phone,
                'role' => $user->role,
                'deleted_at' => $user->deleted_at,
                'job' => $user->job ?? '',
                'bio' => $user->bio ?? '',
            ]);
        } else {
            return response()->json(['success' => false], 404);
        }
    }

    public function editUser(Request $request){

        $user = User::withTrashed()->find($request->user_id);

        if ($user) {
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->role = $request->role;
            if ($request->status == 0){
                $user->deleted_at = null;
            } else {
                $user->delete();
            }
            $user->job = $request->job;
            $user->bio = $request->bio;
            $user->save();

            return response()->json(["success" => true]);
        }

        return response()->json(['success' => false], 404);
    }

    public function carsPage(){
        $cars = Car::withTrashed()->get();
        $carBrands = CarBrand::all();
        $carModels = CarModel::all();

        $colors = [ " ", "Beyaz", "Siyah", "Gri", "Gümüş", "Mavi", "Kırmızı", "Diğer"];
        $guarantee = [" ","Var", "Yok"];
        $gearType = [" ", "Manuel", "Otomatik", "Yarı-Otomatik"];
        $fuelType = [" ", "Benzin", "Dizel", "LPG", "Elektrik"];

        $selectBoxValues = [$colors, $guarantee, $gearType, $fuelType];

        return view('front.admin.cars', compact('cars',"carBrands","carModels", "selectBoxValues"));
    }

    public function getCar(Request $request){
        $car = Car::withTrashed()->find($request->car_id);

        if ($car) {
            return response()->json([
                'success' => true,
                'id' => $car->id,
                'title' => $car->title,
                'brand' => $car->getModels->brand_id,
                'model' => $car->getModels->id,
                'year' => $car->year,
                'color' => $car->color,
                'km' => $car->km,
                'guarantee' => $car->guarantee,
                'gear_type' => $car->gear_type,
                'fuel_type' => $car->fuel_type,
                'description' => $car->description,
                'damage_description' => $car->getDamages->description,
                'deleted_at' => $car->deleted_at,
                'price' => $car->price,
            ]);
        } else {
            return response()->json(['success' => false], 404);
        }
    }

    public function editCar(Request $request){

        $car = Car::withTrashed()->find($request->car_id);

        if ($car) {
            $carDamage = CarDamage::withTrashed()->find($car->id);
            $carDamage->description = $request->damage_description;
            $carDamage->save();

            $car->title = $request->title;
            $car->description = $request->description;
            $car->model_id = $request->model;
            $car->year = $request->year;
            $car->color = $request->color;
            $car->km = $request->km;
            $car->guarantee = $request->guarantee;
            $car->gear_type = $request->gear_type;
            $car->fuel_type = $request->fuel_type;
            $car->damage_id = $carDamage->id;
            $car->price = $request->price;
            if ($request->status == 0){
                $car->deleted_at = null;
            } else {
                $car->delete();
            }
            $car->save();

            return response()->json(["success" => true]);
        }

        return response()->json(['success' => false], 404);
    }

    public function addBrandModelPage(){
        return view("front.admin.addBrandModel");
    }

    public function addBrandModel(Request $request){

        request()->validate([
            "brand" => "required | max:20",
            "model" => "required | max:20",
        ],[
            "brand.required" => "Lütfen marka ekleyiniz!",
            "brand.max" => "Marka maksimum 20 haneli olmalı!",
            "model.required" => "Lütfen model ekleyiniz!",
            "model.max" => "Model maksimum 20 haneli olmalı!"
        ]);

        $carBrand = CarBrand::firstOrCreate(
            ["name" => $request->input("brand")]
        );

        $carModel = new CarModel();
        $carModel->brand_id = $carBrand->id;
        $carModel->name = $request->input("model");
        $carModel->save();

        return redirect()->back()->with("success", "Marka ve model başarıyla eklendi.");
    }
}
