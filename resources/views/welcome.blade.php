@extends('layouts.base')
@section('content')

<div class="container-fluid bg-dark" style="height:100vh">
    <div class="px-4 text-center pt-3">
        <img class="d-block mx-auto" src="/logo.png" alt="" width="200" height="200">
        <h1 class="display-5 fw-bold text-white pt-3" style="font-family: 'Rubik', sans-serif;">Movie Torrent</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4 text-white" style="font-family: 'Poppins', sans-serif;">Best movie website for streaming and downloading movies for free.</p>
        </div>
        <div class="row" align="center">
        <form action="/search" method="post">@csrf
            <div class="form-group mb-2">
                <input placeholder="Search..." type="text" name="search" class="form-control" style="max-width: 700px;" />
                <label class="text-secondary mt-2" style="font-family: 'Poppins', sans-serif;">Search for any movie like Joker, Avengers, SpiderMan etc.</label>
            </div>
            <button type="submit" class="btn btn-lg btn-danger mt-2">Search</button>
        </form>
        </div>
    </div>
</div>


<div class="container-fluid py-5" style="background-color: #000000;">

    <!-- latest movies -->
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center px-5 mb-2" style="background:#212121">
                <h3 class="text-center mt-3 text-white" style="font-family: 'Rubik', sans-serif;">Latest Movies</h3>
                <a href="#" class="btn btn-danger mt-2">See All</a>
            </div>
            <div class="owl-carousel owl-theme" id="one">
                @foreach(App\Models\Movie::orderBy('release_date','DESC')->get() as $movie)
                    <div class="mx-2">
                        <div class="card" style="height:480px">
                            <a href="{{url('/movie/single/'.$movie['id'])}}"><img src="{{'/uploads/movies/'.$movie['image']}}" height="300px" class="card-img-top"/></a>
                            <div class="card-body">
                                <h5 class="card-title" style="overflow:hidden">{{$movie['title']}}&nbsp;({{$movie['release_date']}})</h5>
                                <p><strong>IMDB:</strong> {{$movie['imdb_rating']}}</p>
                                <p><strong>Director:</strong> {{$movie['director']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- hollywood movies -->
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center px-5 mb-2" style="background:#212121">
                <h3 class="text-center mt-3 text-white" style="font-family: 'Rubik', sans-serif;">Hollywood Movies</h3>
                <a href="/hollywood" class="btn btn-danger mt-2">See All</a>
            </div>
            <div class="owl-carousel owl-theme" id="two">
                @foreach(App\Models\Movie::where('label','hollywood')->get() as $hollywood)
                <div class="mx-2">
                    <div class="card" style="height:480px">
                        <a href="{{url('/movie/single/'.$hollywood['id'])}}"><img src="{{'/uploads/movies/'.$hollywood['image']}}" height="300px" class="card-img-top"/></a>
                        <div class="card-body">
                            <h5 class="card-title" style="overflow:hidden">{{$hollywood['title']}}&nbsp;({{$hollywood['release_date']}})</h5>
                            <p><strong>IMDB:</strong> {{$hollywood['imdb_rating']}}</p>
                            <p><strong>Director:</strong> {{$hollywood['director']}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- bollywood movies -->
    <div class="container-fluid mb-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center px-5 mb-2" style="background:#212121">
                <h3 class="text-center mt-3 text-white" style="font-family: 'Rubik', sans-serif;">Bollywood Movies</h3>
                <a href="/bollywood" class="btn btn-danger mt-2">See All</a>
            </div>
            <div class="owl-carousel owl-theme" id="three">
                @foreach(App\Models\Movie::where('label','bollywood')->get() as $bollywood)
                    <div class="mx-2">
                        <div class="card" style="height:480px">
                            <a href="{{url('/movie/single/'.$bollywood['id'])}}"><img src="{{'/uploads/movies/'.$bollywood['image']}}" height="300px" class="card-img-top"/></a>
                            <div class="card-body">
                                <h5 class="card-title" style="overflow:hidden">{{$bollywood['title']}}&nbsp;({{$bollywood['release_date']}})</h5>
                                <p><strong>IMDB:</strong> {{$bollywood['imdb_rating']}}</p>
                                <p><strong>Director:</strong> {{$bollywood['director']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>


@stop
