@extends('layouts.app')

@section('content')
    <h2 style="color: goldenrod">EDIT CAR ID: {{$car->id}}</h2>
    <div class="container py-5">
        <form action="/cars/{{$car->id}}/edit" method="post" class="row">
            @method('PUT') {{-- method for blade --}}
            @csrf
            <div class="col col-12 col-md-6 col-lg-4 mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" id="model" placeholder="Yaris" value="{{$car->model}}">
                    @error('model')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
            </div>
            <div class="col col-12 col-md-6 col-lg-4 mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="year" name="year" class="form-control @error('year') is-invalid @enderror" id="year" placeholder="2024" value="{{$car->year}}">
                    @error('year')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
            </div>
            <div class="col col-12 col-md-6 col-lg-4 mb-3">
                <label for="salespersonemail" class="form-label">Sales Person Email</label>
                <input type="email" name="salespersonemail" class="form-control @error('salespersonemail') is-invalid @enderror" id="salespersonemail" placeholder="joe@japanauto.com" value="{{$car->salesperson_email}}">
                @error('salespersonemail')
                    <span class="invalid-feedback">
                        {{$message}}
                    </span>
                @enderror
            </div>
            <div class="col col-12 col-md-6 col-lg-4 mb-3">
                <label for="manufacturer" class="form-label">Manufacturer</label>
                <select name="manufacturer" class="form-select @error('manufacturer') is-invalid @enderror"
                        id="manufacturer">
                    <option value="0">Select Manufacturer</option>
                    @foreach($manufacturers as $manufacturer)
                        <option value="{{$manufacturer->id}}"
                            {{$manufacturer->id === $car->manufacturer_id ? 'selected' : ''}}
                        >{{$manufacturer->name}}</option>
                    @endforeach
                </select>
                @error('manufacturer')
                <span class="invalid-feedback">
                        {{ $message }}
                </span>
                @enderror
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">
                        Save Changes
                </button>
            </div>

            @if($success)
                <div class="col-12">
                    <div class="alert alert-success my-4">
                        Changes were saved.
                    </div>
                </div>
            @endif
        </form>
    </div>
@endsection