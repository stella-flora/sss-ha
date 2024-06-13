<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $manufacturers = Manufacturer::all();

        return view('cars', [
                                        'cars' => $cars,
                                        'manufacturers' => $manufacturers
                                    ]);
    }


    public function show(Car $car)
    {
        return view('car', ['car' => $car]);
    }
}
