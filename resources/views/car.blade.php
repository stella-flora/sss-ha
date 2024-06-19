@extends('layouts.app')

@section('content')
    <div class="card" style="background-color: lemonchiffon;">
        <div class="card-header" style="background-color: #8d0122; color: goldenrod;">
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
                    <a href="/cars/{{$car->id}}/edit"
                        class="btn btn-warning btn-default btn-sm">
                        Edit
                     </a>
                    {{-- <button type="button" class="btn btn-warning btn-sm"> Edit </button> --}}
                    <button
                        onclick="delCar('{{$car->id}}')"
                        type="button" class="btn btn-danger btn-sm">Delete
                    </button>
                </div>
            </div>   
        </div>
    </div>
@endsection

{{-- <script>
    function delCar(id) {
        axios('/api/cars/' + id + "/del", {
            method: "put"
        }).then(() => {
            document.getElementById(id).remove();
            window.location.href = "/";
        }).catch(e => {

        }).finally(() => {

        });
    }
</script> --}}

<script>
    function delCar(id) {
        axios('/api/cars/' + id, {
            method: "DELETE"
        }).then(() => {
            window.location.href = "/";
            document.getElementById(id).remove();
        }).catch(e => {

        }).finally(() => {

        });
    }
</script>

