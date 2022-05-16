@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 my-3">
                    <div class="pull-right">
                        <div class="btn-group">
                            <button class="btn btn-info" id="list">
                                List View
                            </button>
                            <button class="btn btn-danger" id="grid">
                                Grid View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- List of movies  --}}
            <div id="products" class="row view-group">
                    @for ($i = 0;$i < count($movies);$i++)

                            <div class="item col-xs-4 col-lg-4">
                                <div class="thumbnail card">
                                    <div class="img-event">
                                        <img class="group list-group-image img-fluid" src="{{$movies[$i]['posterurl']}}" alt="" />
                                    </div>
                                    <div class="caption card-body">
                                        <h4 class="group card-title inner list-group-item-heading"><b>{{ $movies[$i]['title'] }}</b><small>[{{$movies[$i]['year']}}]</small></h4>
                                        <p class="group inner list-group-item-text">
                                            <small>{{$movies[$i]['storyline']}}</small>
                                        </p>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <p>Genres : @for ($z = 0;$z < count($movies[$i]['genres']);$z++) {{$movies[$i]['genres'][$z]}}    @endfor</p>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <p>Starring : @for ($z = 0;$z < count($movies[$i]['actors']);$z++) {{$movies[$i]['actors'][$z]}}    @endfor</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <p class="lead"></p>
                                                <p>Rating : {{$movies[$i]['imdbRating']}}<i class="bi bi-star-fill"></i></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <p class="pull-right">Duration : {{$movies[$i]['duration']}}</p>
                                            </div>
                                            <div class="col-xs-12 col-md-6">
                                                <p class="pull-right">Content Rating: {{$movies[$i]['contentRating']}}</p>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                    @endfor
            </div>
        </div>
@endsection
