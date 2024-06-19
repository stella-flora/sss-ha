@extends('layouts.app')

@section('content')
    <h2 style="color: goldenrod">ADD NEW CAR</h2>
    <div class="container py-5">
        <form action="/cars/create" method="post" class="row">
            @csrf
            <div class="col col-12 col-md-6 col-lg-4 mb-3">
                    <label for="model" class="form-label">Model</label>
                    <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" id="model" placeholder="Yaris">
                    @error('model')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
            </div>
            <div class="col col-12 col-md-6 col-lg-4 mb-3">
                    <label for="year" class="form-label">Year</label>
                    <input type="year" name="year" class="form-control @error('year') is-invalid @enderror" id="year" placeholder="2024">
                    @error('year')
                        <span class="invalid-feedback">
                            {{$message}}
                        </span>
                    @enderror
            </div>
            <div class="col col-12 col-md-6 col-lg-4 mb-3">
                <label for="salespersonemail" class="form-label">Sales Person Email</label>
                <input type="email" name="salespersonemail" class="form-control @error('salespersonemail') is-invalid @enderror" id="salespersonemail" placeholder="joe@japanauto.com">
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
                        <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
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
                        Add Car
                </button>
            </div>

            @if($success)
                <div class="col-12">
                    <div class="alert alert-success my-4">
                        Car was added.
                    </div>
                </div>
            @endif
        </form>
    </div>
@endsection