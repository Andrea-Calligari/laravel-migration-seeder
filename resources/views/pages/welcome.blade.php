@extends('layout.app')

@section('title', 'Welcome')

<h1 class="text-danger text-center py-5">Welcome to your Template Repository!!!</h1>
<p class="text-center fs-3"> All front-end assets is set and ready for your new projects! Enjoy! </p>



@section('content')
<div class="container">
    <h1 class="text-center">Treni Filtrati con la data di oggi</h1>
    <div class="row">
        @foreach ($filteredTrain as $train)
            <div class="col-12 py-4">
                <div class="card text-center">
                    <div class="card-title">
                    </div>
                    <div class="card-body">

                        <p> <span class="fw-bold">Partenza:</span> {{$train->station_of_departure}}  =====>  <span class="fw-bold">Arrivo:</span> {{$train->station_of_arrival}} </p>
                    
                        <p><span class="fw-bold">Orario di Partenza:</span> {{$train->time_of_departure}}   <span class="fw-bold">Orario di Arrivo: </span> {{$train->time_of_arrival}}</p>
                        <p></p>
                    </div>

                </div>
            </div>



        @endforeach


    </div>
</div>
<div class="container">
    <h1 class="text-center">Tutti i Treni</h1>
    <div class="row">
        @foreach ($trains as $train)
            <div class="col-3 py-4">
                <div class="card text-center">
                    <div class="card-body">

                        <p>{{$train->station_of_departure}}</p>
                        <p>{{$train->station_of_arrival}}</p>
                        <p>{{$train->time_of_departure}}</p>
                        <p>{{$train->time_of_arrival}}</p>
                    </div>

                </div>
            </div>



        @endforeach


    </div>
</div>

@endsection