@extends('backend.master')



@section('content')

<form action="{{route('floor.store')}}" method="post">


    <div class="col-md-6">
        @csrf
        <div class="form-group">
            <label for="id">Enter id:</label>
            <input id="id"type="number"name="id"pleaceholder="id" class="form-control">
        </div>

        <div class="form-group">
            <label for="id">Enter Floor id:</label>
            <input id="id"type="number"name="floor_id"pleaceholder="floor_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Enter Floor name:</label>
            <input id="name"type="text"name="floor_name"pleaceholder="floor_name" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">Enter  Floor status:</label>
            <input id="status"type="text"name="floor_status"pleaceholder="floor_status" class="form-control">
        </div>
        <div class="form-group">
            <label for="size"> Enter Floor size:</label>
            <input id="size"type="number"name="floor_size"pleaceholder="floor_size" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Enter Floor description:</label>
            <input id="description"type="text"name="floor_description"pleaceholder="floor_descritipon" class="form-control">
        </div>

         {{-- @dd($flats) --}}

        <div class="form-group">
            <label for="id">Enter flat_id:</label>
            <select class="form-control" name="flat_id" id="flat_id">

                @foreach ($flats as $data )

                <option value="{{$data->flat_id }}">"{{ $data->flat_name}}"</option>

                @endforeach




            </select>
        </div>




    <button type="submit" class="btn_btn-success"> submit</button>
    </div>
</form>

@endsection
