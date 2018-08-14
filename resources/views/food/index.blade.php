@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row">
      @foreach($foods as $food)
        @php($image = $food["image"])
        <div class="col-12 card" style="margin:10px">
            <div class="row">
              <div class="col-md-4 col-xs-12" style="padding:0px">
                <img style="height:100%; width:100%" src='{{ asset("/image/food/$image") }}'>
              </div>
              <div class="col-md-8 col-xs-12 card-body">
                <h5 class="card-title">{{ $food["name_ch"] }}</h5>
                <h6 class="card-title">{{ $food["name_th"] }}</h6>
                <p class="card-text">{{ $food["price"] }}$</p>
              </div>
            </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection