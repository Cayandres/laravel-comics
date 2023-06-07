@extends('layout.main')

@section('content')

    <div class="jumbotron">
      <img src="/src/img/jumbotron.jpg" alt="">
    </div>
    <div class="container-background">
      <div class="container">
        <span>CURRENT SERIES</span>
        @forelse ($comics as $comic)

        <div class="card">
          <div class="card-image">
            <img src="{{ $comic['thumb'] }}" alt="">
         </div>
         <h4>{{ $comic['title'] }}</h4>
        </div>  

        @empty
        @endforelse
        
      </div>
    </div>
@endsection

