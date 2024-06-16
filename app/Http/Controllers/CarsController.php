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

    public function delete(Car $car)
    {
        // delete car
        $car->delete();

        return response()->noContent(); // returns 204
        //return redirect("/");
    }

    //for deleting from details page
    public function del(Car $car)
    {
        // delete car
        $car->delete();

        //redirect to home page / cars table
        return redirect("/");

       //return response()->noContent(); // returns 204
    }


}
