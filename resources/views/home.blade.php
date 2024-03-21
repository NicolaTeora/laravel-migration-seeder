@extends('layout.app')

@section('main-content')
  <div class="container py-3">
    
    <h1>home page</h1>
    <div class="row g-2 flex-wrap">
      
      @forelse ($trains as $train)
      <div class="col-4">

        <div class="card p-2 h-100">

          <ul>
            <li>
              <strong>{{$train->agency}}</strong>
              <br>
              <strong>Treno: </strong>
              <span>{{$train->code_train}}</span>
            </li>
            <li>
              <strong>Proveniente da: </strong>
              <span>{{$train->departure_station}}</span>
              <br>
              <strong>Ore: </strong> 
              <span>{{ $train->departure_time }}</span>
            </li>
            <li>
              <strong>In Arrivo a: </strong>
              <span>{{$train->arrival_station}}</span>
              <br>
              <strong>Delle ore: </strong>
              <span>{{$train->arrival_time}}</span>
            </li>
            <li>
              <strong>Numero Carrozze: </strong><span>{{$train->num_carriages}}</span>
            </li>
          </ul>  
        </div>
      </div>
      @empty
          <h3>Nessun Treno</h3>
      @endforelse
        
    </div>

  </div>
@endsection