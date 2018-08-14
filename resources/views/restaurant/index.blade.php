@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row" style="background:red">
      <!-- BANNER -->
    </div>
    <div class="row">
      <div class="col-12" style="text-align:center">
        <h1>Restaurants</h1>
      </div>
    </div>
    <div class="row">
      @foreach($restaurants as $rest)
        @php($image = $rest['image'])
        @php($rest_id = $rest['id'])
        <div class="card" style="width: 18rem; margin:10px">
          <img class="card-img-top" src='{{ asset("image/restaurant/$image") }}'>
          <div class="card-body">
            <h5 class="card-title">{{ $rest["name"] }}</h5>
            <p class="card-text">{{ $rest["min_price"] }} - {{ $rest["max_price"] }}$</p>
            <a href='{{ url("/foods/$rest_id") }}' class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection