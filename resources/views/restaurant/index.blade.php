@extends("layouts.app")

@section("content")
  <div class="container">
    <div class="row" style="background:red">
      <!-- BANNER -->
      BANNER
    </div>
    <div class="row">
      {{ json_encode($restaurants) }}
    </div>
  </div>
@endsection