@extends('layouts.app')

@section('content')
    <div class="card" style="background-color: lemonchiffon;">
        <div class="card-header" style="background-color: #BC002D; color: goldenrod;">
            Car Details: {{$car->id}}
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">Manufacturer:</div>
                <div class="col">{{$car->manufacturer->name}}</div>
            </div>
            <div class="row">
                <div class="col">Model:</div>
                <div class="col font-weight-bold">{{$car->model}}</div>
            </div>        
            <div class="row">
                <div class="col">Year:</div>
                <div class="col">{{$car->year}}</div>
            </div>   
            <div class="row">
                <div class="col">Salesperson Email:</div>
                <div class="col">{{$car->salesperson_email}}</div>
            </div>
            <hr/>
            <div class="row justify-content-center">
                <div class="col"></div>
                <div class="col">
                    <button type="button" class="btn btn-warning btn-sm"> Edit </button>
                    <button type="button" class="btn btn-danger btn-sm"> Delete </button>
                </div>
            </div>   
        </div>
    </div>
@endsection
