@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row" style="background:red">
      <!-- BANNER -->
      BANNER
    </div>
    <img src="{{ asset('image/dog1.jpg')}}" alt="">
    <div class="row">
      @foreach($restaurants as $restaurant)
        <div class="col-4">
          {{ $restaurant["name"] }}
        </div>
      @endforeach
    </div>
  </div>
@endsection