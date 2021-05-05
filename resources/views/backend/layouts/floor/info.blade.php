@extends('backend.master')



@section('content')

<a class="btn btn-success"href="{{route('floor.create')}}">Addfloorinfo</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">id</th>

        <th scope="col">floor_id</th>

        <th scope="col">floor_name</th>
        <th scope="col">floor_status</th>
        <th scope="col">floor_size</th>
        <th scope="col">floor_description</th>
        <th scope="col">flat_id</th>



      </tr>
    </thead>
    <tbody>
        @foreach ($floors as $key=>$data)


      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->id}}</td>
        <td>{{$data->floor_id}}</td>
        <td>{{$data->floor_name}}</td>
        <td>{{$data->floor_status}}</td>
        <td>{{$data->floor_size}}</td>
        <td>{{$data->floor_description}}</td>
        <td>{{$data->flat_id}}</td>
        {{-- <td>{{$data->floorflat->flat_name}}</td> --}}
      </tr>
      @endforeach

    </tbody>
  </table>


@endsection
