@extends('frontend.master')

@section('content')

<div class="album py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-1 g-3">

            <label for=""><strong>House Name:</strong>{{ $house->house_name }}</label>
            <label for=""><strong>House Description:</strong>{{ $house->house_description }}<</label>
            <label for=""><strong>Floor Description:</strong>{{ $house->floor_description }}</label>
            <label for=""><strong>Flat Description:</strong>{{ $house->flat_description }}</label>
            <label for=""><strong>Flat Name:</strong>{{ $house->flat_name }}</label>
            <label for=""><strong>Flat Size:</strong>{{ $house->flat_size }}</label>





    </div>
 </div>
</div>
@endsection
