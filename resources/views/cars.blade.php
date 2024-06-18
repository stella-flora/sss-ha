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
                    <a href="/cars/{{$car->id}}"
                        class="btn btn-info btn-default btn-sm">
                        View
                     </a>
                     <a href="/cars/{{$car->id}}/edit"
                        class="btn btn-warning btn-default btn-sm">
                        Edit
                     </a>
                     <button
                        onclick="deleteCar('{{$car->id}}')"
                        type="button" class="btn btn-danger btn-sm">Delete
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


<script>
    function deleteCar(id) {
        axios('/api/cars/' + id, {
            method: "DELETE"
        }).then(() => {
            document.getElementById(id).remove();
        }).catch(e => {

        }).finally(() => {

        });
    }
</script>





