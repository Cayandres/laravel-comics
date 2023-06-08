@extends('layout.main')
@section('content')
<div class="container">
    <div class="card mx-auto my-5" style="width: 18rem;">   
      <img src="{{$comic['thumb']}}" class="card-img-top" alt="...">
     <div class="card-body">
      <h5 class="card-title">{{$comic['title']}}</h5>
      <p class="card-text">{{$comic['description']}}</p>
     </div>
    </div>
</div>
@endsection