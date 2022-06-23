@extends('layouts.base')
@section('content')

<div class="container-fluid py-5 bg-dark text-white">
    <div class="px-4 py-5 text-center">
        <h1 class="display-5 fw-bold" style="font-family: 'Rubik', sans-serif;">Bollywood Movies</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4" style="font-family: 'Poppins', sans-serif;">Download & Stream Best Bollywood movies in best 1080p completely free.</p>
            <p style="font-size:20px;font-family: 'Poppins', sans-serif;"><strong>Total Results found:</strong> {{$count}}</p>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-sm-3">
            <h3 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">All Genres</h3>
            @foreach(App\Models\Category::get() as $cat)
            <p align="center"><a href="{{'/category/'.$cat['id'].'/bollywood'}}">{{$cat['title']}}</a></p>
            @endforeach
        </div>
        <div class="col-sm-9">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($movies as $movie)
                <div class="col mb-3">
                    <div class="card">
                    <a href="{{url('/movie/single/'.$movie['id'])}}"><img src="{{'/uploads/movies/'.$movie['image']}}" class="card-img-top" height="350px" ></a>
                    <div class="card-body">
                        <h3 class="card-title" style="font-family: 'Rubik', sans-serif;">{{$movie['title']}}&nbsp;({{$movie['release_date']}})</h3>
                        <div class="">
                            <p><strong>IMDB:</strong> {{$movie['imdb_rating']}}</p>
                            <p><strong>Director:</strong> {{$movie['director']}}</p>
                        </div>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row py-3" align="center">
                {{$movies->links()}}
            </div>
        </div>
    </div>
</div>

@stop
