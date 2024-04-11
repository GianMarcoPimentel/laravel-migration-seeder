@extends('layouts/app')

@section('content')

<div class="container py-5 ">
    <h1 class="title py-5">Lista dei Treni : </h1>
     <div class="trains">

         @foreach ($trains as $train)
             <ul>
                 <li class="{{$train->on_time ? 'bg-warning text-white' : ''}} {{$train->deleted ? 'bg-danger text-white' : ''}}">
                 <p>Compagnia : {{$train->company}}</p> 
                 <p>Partenza da : {{$train->departured}}</p> 
                 <p>Arrivo a : {{$train->arrival_station}}</p>
                 <p>Orario di partenza : {{$train->started_time}}</p>
                 <p>Orario di arrivo : {{$train->arrival_time}}</p>
                 <p>Codice del treno : {{$train->train_code}}</p> 
                 <p>Numero Carrozza : {{$train->carriage_number}}</p>
                 {{-- <p>In orario : @if ($train->on_time == 1) Si @else in Ritardo @endif </p>
                 <p>Cancellato : @if ($train->deleted ==1 ) Cancellato @else In Arrvio @endif</p> --}}
                </li>
             </ul>
         @endforeach

     </div>
</div>

@endsection