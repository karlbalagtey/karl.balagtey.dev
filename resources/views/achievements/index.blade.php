@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row col">
            <h1>Activities</h1>
            <p>Achievements, Awards, Workshops</p>
        </div>
        <div class="row">
            <a href="{{ url('/') }}" class="btn btn-lg">Go Back</a>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                @foreach($activities as $activity)
                    <div>
                        <h2><a href="{{ $activity->link }}" target="_blank">{{ $activity->title }}</a></h2>
                        <p>{{ $activity->description }}}</p>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>
    </div>
@endsection