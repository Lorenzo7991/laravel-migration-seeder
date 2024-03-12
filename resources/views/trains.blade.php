@extends('layouts.main')

@section('title', 'Trains List')

@section('main-content')
    <div class="container">
        <h1 class="mt-4 mb-3">Trains List</h1>
        <div class="row">
            @foreach($trains as $train)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title"><strong>Train number:</strong> {{ $train->train_code }}</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text"><strong>Agency:</strong> {{ $train->agency }}</p>
                            <p class="card-text"><strong>Departure Station:</strong> {{ $train->departure_station }}</p>
                            <p class="card-text"><strong>Arrival Station:</strong> {{ $train->arrival_station }}</p>
                            <p class="card-text"><strong>Departure Time:</strong> {{ $train->departure_time }}</p>
                            <p class="card-text"><strong>Arrival Time:</strong> {{ $train->arrival_time }}</p>
                            <p class="card-text"><strong>Number of Carriages:</strong> {{ $train->num_carriages }}</p>
                            <p class="card-text"><strong>In Time:</strong> {{ $train->in_time ? 'Yes' : 'No' }}</p>
                            <p class="card-text"><strong>Deleted:</strong> {{ $train->deleted ? 'Yes' : 'No' }}</p>
                        </div>
                        <a href="{{ route('trains.show', ['id' => $train->id]) }}" class="btn btn-primary">Vedi dettagli</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
</strong>