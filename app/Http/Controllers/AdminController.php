<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addBrandModelPage()
    {
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
