<!DOCTYPE html>
<html>
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