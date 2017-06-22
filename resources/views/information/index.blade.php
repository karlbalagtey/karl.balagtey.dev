@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <div class="h1">{{ $owner->name }}</div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <p>{{ $owner->about->paragraph1 }}</p>
                <p>{{ $owner->about->paragraph2 }}</p>
            </div>
        </div>
        <div class="row">
            <a href="{{ url('/') }}" class="btn btn-lg">Go Back</a>
        </div>
    </div>
@endsection
