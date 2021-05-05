@extends('frontend.master')

@section('content')

<div class="album py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3">

            <label for="">House Name:{{ $house->house_name }}</label>
            <label for="">House Description:{{ $house->house_description }}</label>
            <label for="">Floor Description:{{ $house->floor_description }}</label>
            <label for="">Flat Description:{{ $house->flat_description }}</label>




    </div>
 </div>
</div>
@endsection
