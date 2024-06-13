@extends('layouts.app')

@section('content')
    <h3 style="color: goldenrod;">MANUFACTURERS</h3>

    <table class="table">
        <thead>
        <tr class="table-danger">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Telephone</th>
        </tr>
        </thead>
        <tbody>
        @foreach($manufacturers as $manufacturer)
            <tr id="{{$manufacturer->id}}">
                <th scope="row">{{$manufacturer->id}}</th>
                <td class="table-danger">{{$manufacturer->name}}</td>
                <td>{{$manufacturer->address}}</td>
                <td>{{$manufacturer->phone}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection