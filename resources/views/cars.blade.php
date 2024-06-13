@extends('layouts.app')

@section('content')
    <h2 style="color: goldenrod">CARS</h2>

    <table class="table">
        <thead>
        <tr class="table-danger">
            <th scope="col">ID</th>
            <th scope="col">Manufacturer</th>
            <th scope="col">Model</th>
            <th scope="col">Year</th>
            <th scope="col">Sales Person Email</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr id="{{$car->id}}">
                <th scope="row">{{$car->id}}</th>
                <td>{{$car->manufacturer->name}}</td>
                <td class="table-danger">{{$car->model}}</td>
                <td>{{$car->year}}</td>
                <td>{{$car->salesperson_email}}</td>
                <td>
                    <a href="/car/{{$car->id}}"
                        class="btn btn-info btn-default btn-sm">
                        View
                     </a>
                     <a href="/edit/{{$car->id}}"
                        class="btn btn-warning btn-default btn-sm">
                        Edit
                     </a>
                     <a href="/delete/{{$car->id}}"
                        class="btn btn-danger btn-default btn-sm">
                        Delete
                     </a>
                     {{-- <button
                        onclick="deleteCar('{{$car->id}}')"
                        type="button" class="btn btn-danger btn-sm">Delete
                    </button> --}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection