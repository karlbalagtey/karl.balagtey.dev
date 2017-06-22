@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row col">
            <h1>Interests</h1>
            <p>Technology</p>
        </div>
        <div class="row">
            <a href="{{ url('/') }}" class="btn btn-lg">Go Back</a>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                @foreach($interests as $activity)
                    <div>
                        <h2><a href="{{ $activity->url }}" target="_blank">{{ $activity->title }}</a></h2>
                        <p>{{ $activity->description }}}</p>
                        <img src="{{ $activity->urlToImage }}" class="img-fluid">
                    </div>
                    <hr>
                @endforeach
                <span class="h1">{{ $interests->render() }}</span>
            </div>
        </div>
    </div>
@endsection