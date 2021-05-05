@extends('frontend.master')

@section('content')



<section class="py-5 text-center container">
  <img src="./20210411060410.jpg" style="width:400px;height:400px" alt="">
  </section>




  <div class="album py-5">
    <div class="container">

        @foreach($all_houseinfo as $data)




        <div class="row">
          <div class="col-md-5">
          <div>
          <img style="height:300px"src="{{url('/uploads/house/'.$data->house_image) }}"  class="card-img-top" alt="...">
          </div>
          </div>
          <div class="col-md-5">
            <h3>BDT <span style="font-size:40px">{{ $data->flat_price }}</span></h3>
            <p class="card-text">{{ $data->house_address }}</p>
            <p class="card-text"> <strong>Description: </strong> {{ $data->house_description }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group d-flex justify-content-space-between">
                  {{-- <button type="button" class="btn btn-primary" >Booknow</button>
                  <button type="button" class="btn btn-info">Details</button> --}}
                  <a href="{{ route('show.house',$data->id) }}" class="btn btn-primary mr-2"style="margin-right: 20px"><i class="fa fa-home" style="margin-right:10px"></i>Booknow</a>
                <a href="{{ route('details.house',$data->id) }}"class="btn btn-info"><i class="fa fa-info-circle" style="margin-right:10px"></i>Details</a>
                <a href="{{ route('payment.house',$data->id) }}" class="btn btn-danger mr-2"style="margin-right: 20px"><i class="fa fa-home" style="margin-right:10px"></i>Payment</a>
            </div>
                <small class="text-muted"></small>
              </div>
          </div>
          {{-- <hr> --}}
        </div>




         @endforeach

         {{-- @endforeach --}}



      </div>
    </div>
  </div>

         @endsection
