<!DOCTYPE html>
<html>
    <head>
        <title>Japan Auto</title>

    </head>
    <body>   
        <?php
        use \App\Models\Manufacturer;
        $manufacturers = Manufacturer::all();

        ?>

        @foreach ($manufacturers as $manufacturer)
        <p>{{$manufacturer->name}}</p>
        <br/>
        @endforeach

    </body>
</html>