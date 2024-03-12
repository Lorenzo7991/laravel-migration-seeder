@extends('layouts.main')

@section('title', 'Train Details')

@section('main-content')
    <div class="container">
        <h1 class="mt-4 mb-3">Train Details</h1>
        <div class="row mb-5">
            <div class="col-12 mb-3">
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
                </div>
            </div>
        </div>
    </div>
@endsection
