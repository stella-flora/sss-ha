<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarCreateRequest;
use App\Http\Requests\CarEditRequest;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;


class CarsController extends Controller
{
    public function create()
    {
        $manufacturers = Manufacturer::all();

        return view('create', ['manufacturers' => $manufacturers , 'success' => false]);
    }

    public function store(CarCreateRequest $request, Car $car)
    {
        $car = new Car([
            $car->model = $request->input('model'),
            $car->year = $request->input('year'),
            $car->salesperson_email = $request->input('salespersonemail'),
            $car->manufacturer_id = $request->input('manufacturer'),
        ]);
        

        $car->save();

        $manufacturers = Manufacturer::all();

        return view('create', ['manufacturers'=> $manufacturers, 'success' => true]);
    }

    public function edit(Car $car) {

        $manufacturers = Manufacturer::all();

        return view('edit', ['car'=> $car, 'manufacturers'=> $manufacturers, 'success' => false]);

    }

    public function update(CarEditRequest $request, Car $car)
    {
        // $manufacturers = Manufacturer::all();

        $car->model = $request->input('model');
        $car->year = $request->input('year');
        $car->salesperson_email = $request->input('salespersonemail');
        $car->manufacturer_id = $request->input('manufacturer');

        $car->save();

        $manufacturers = Manufacturer::all();

        return view('edit', ['car'=> $car, 'manufacturers'=> $manufacturers, 'success' => true]);
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
        //return view('/');
        //return response()->noContent(); // returns 204
    }


    public function index(Request $request)
    {
        $manufacturers = Manufacturer::all();

        $cars = Car::all();

        $search = $request->input('search');

        if(!empty($search))
        {
            $cars = Car::query()
                        ->where('model', 'LIKE', "%$search%")
                        ->orWhereHas('manufacturer', function ($query) use ($search)
                            {
                                $query->where('name', 'LIKE', "%{$search}%");
                            })
                        ->get();
        }

        return view('cars', [
                                        'cars' => $cars,
                                        'manufacturers' => $manufacturers
                                    ]);
    }


}
