@extends('layouts.app')
@section('head')
    <style>
        #graph {
            display: none;
        }
    </style>
@endsection
@section('content')
    <div id="vm1" class="container">
        <div class="row">
            <div class="col">
                <h1>Projects</h1>
                <p>Portfolio, Experiment, Fun</p>
            </div>
        </div>
        <div class="row">
            <a href="{{ url('/') }}" class="btn btn-lg">Go Back</a>
        </div>
        <hr>

        @foreach($projects as $project)
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <a href="http://{{ $project->link }}" target="_blank">
                        <h2>{{ $project->title }}</h2>
                    </a>
                    <p>{{ $project->description }}</p>
                    <hr>
                    <div>
                        <h1 class="h4">Development</h1>
                        @foreach($project->skills as $skills)
                            <p>{{ $skills->name }}: {{ $skills->value }}%</p>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="card">
                        <div class="card-block">
                            <h1 class="h3"><a href="#" class="techStack">Technology Stack</a></h1>
                            <hr>
                            <div class="col">
                                @foreach($project->technologies as $tech)
                                    <p>{{ $tech->name }}: {{ $tech->pivot->value }}%</p>
                                @endforeach
                            </div>
                            <div class="col">
                                <canvas id="graph"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <a href="http://{{ $project->link }}" target="_blank">
                        <img class="img-fluid" src="{{ $project->urlToImage }}">
                    </a>
                </div>
            </div>
            <hr>
        @endforeach

    </div>
@endsection
@section('script')
    <script src="https://unpkg.com/vue"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <script>
        new Vue({
           el: '#vm1',
           data: {
               message: 'call this'
           }
        });
    </script>
    <script>
        var tecBtn = document.querySelector('.techStack');

        var chart = function (){
            var ctx = document.getElementById('graph').getContext('2d');

            new Chart(ctx, {
                // The type of chart we want to create
                type: 'bar',

                // The data for our dataset
                data: {
                    labels: ["Zero Point", "Front End Development", "Back End Development"],
                    datasets: [
                        {
                            label: "Front End Development",
                            backgroundColor: 'rgb(66, 99, 88)',
                            borderColor: 'rgb(66, 99, 132)',
                            data: [0, 30, 0],
                        },
                        {
                            label: "Back End Development",
                            backgroundColor: 'rgb(88, 99, 132)',
                            borderColor: 'rgb(88, 99, 132)',
                            data: [0, 0, 70],
                        }
                    ]
                },

                // Configuration options go here
                options: {}
            });
        };

        tecBtn.onclick = chart;

    </script>
@endsection