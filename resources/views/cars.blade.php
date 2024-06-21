@extends('layouts.app')

@section('content')
    

    <div class="container mb2">
    <div class="row">
         <div class="col col-12 col-md-6 col-lg-4 mb-3">
            <h2 style="color: goldenrod">CARS</h2>
         </div>
         <div class="col col-12 col-md-6 col-lg-4 mb-3">
            <form action="/" method="GET">
                <div>
                    <input type="text" name="search" class="form-control" id="search" placeholder="Search...">
                </div>
                <div class="col mb-3">
                    <button class="btn btn-primary btn-sm">Search</button>
                </div>
            </form>
        </div>
        @auth
         <div class="col col-12 col-md-6 col-lg-4 mb-3 text-right">
            <a href="/cars/create"
            class="btn btn-success btn-md">
            Add New
            </a>
         </div>
        @endauth
    </div>
    </div>

    @include('carsTable', ['title' => 'Cars', 'cars' => $cars])

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





