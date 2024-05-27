@extends('layout.app')

@section('title', 'Trains')





@section('content')
<div class="container py-5">
    <h1 class="text-center p-4">Treni Filtrati con la data di oggi</h1>
    <div class="row">
        @if(!$filteredTrains)
            @foreach ($filteredTrains as $filteredTrain)
                <div class="col-12 py-4">
                    <div class="card text-center">
                        <div class="card-title">
                        </div>
                        <div class="card-body">

                            <p> <span class="fw-bold">Partenza:</span> {{$filteredTrain->station_of_departure}} =====> <span
                                    class="fw-bold">Arrivo:</span> {{$filteredTrain->station_of_arrival}} </p>

                            <p><span class="fw-bold">Orario di Partenza:</span> {{$filteredTrain->time_of_departure}} <span
                                    class="fw-bold">Orario di Arrivo: </span> {{$filteredTrain->time_of_arrival}}</p>
                            <p></p>
                        </div>

                    </div>
                </div>



            @endforeach
        @else 
            <h1 class="text-center text-danger">Nessun treno in data odierna causa sciopero !</h1>
        @endif


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