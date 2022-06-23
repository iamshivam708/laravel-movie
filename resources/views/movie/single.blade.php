@extends('layouts.base')
@section('content')

<div class="container-fluid">
    <div class="container">

            <!-- trailer -->
            <div class="row mt-3">
                <iframe width="100%" height="400px"
                    src="{{$movie['trailer']}}">
                </iframe>
            </div>

            <!-- details -->
            <div class="row mt-3 py-3 px-5 bg-dark text-white">
                <h1 class="text-center" style="font-family: 'Rubik', sans-serif;"><u>{{$movie['title']}}</u>({{$movie['release_date']}})</h1>
                <div class="mt-3 d-flex flex-row justify-content-around">
                    <h3>IMDB: {{$movie['imdb_rating']}}</h3>
                    <h3>Genre: {{$movie['category']}}</h3>
                    <h3>Audio: {{$movie['audio']}}</h3>
                    <h3>Subtitle: {{$movie['subtitle']}}</h3>
                </div>
            </div>

            <!-- summary -->
            <div class="row py-5 px-5">
                <div class="col-6">
                    <h3 style="font-family: 'Rubik', sans-serif;"><u><b>Summary</b></u></h3>
                    <p style="font-size:20px;font-family: 'Poppins', sans-serif;">{{$movie['about']}}</p>
                </div>
                <div class="col-6">
                    <h3 style="font-family: 'Rubik', sans-serif;"><u><b>Director</b></u></h3>
                    <p style="font-size:20px;font-family: 'Poppins', sans-serif;">&nbsp;&nbsp;{{$movie['director']}}</p>
                    <h3 style="font-family: 'Rubik', sans-serif;"><u><b>Top Cast</b></u></h3>
                    @foreach($topcasts as $tc)
                        <div class="d-flex mt-3 align-items-center">
                            <img src="{{'/uploads/topcast/'.$tc['image']}}" class="rounded-circle" height="80px" width="80px" />&nbsp;&nbsp;&nbsp;&nbsp;
                            <p style="font-size:18px;font-family: 'Rubik', sans-serif;">{{$tc['name']}}</p>&nbsp;&nbsp;
                            <p class="text-muted" style="font-style: italic;">as</p>&nbsp;&nbsp;
                            <p style="font-size:18px;font-family: 'Rubik', sans-serif;">{{$tc['role']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- screenshots -->
            <div class="row">
                <div class="container-fluid mb-5">
                    <div class="container">
                        <div class="d-flex justify-content-between align-items-center px-5 mb-2" style="background:#212121">
                            <h3 class="text-center mt-3 text-white" style="font-family: 'Rubik', sans-serif;">ScreenShots</h3>
                            <p></p>
                        </div>
                        <div class="owl-carousel owl-theme" id="screenshots">
                            <div class="mx-2" style="background: pink">
                                <div class="card">
                                    <img src="{{'/uploads/screenshots/'.$screenshot['screenshot1']}}" height="300px" class="card-img-top"/>
                                </div>
                            </div>
                            <div class="mx-2" style="background: pink">
                                <div class="card">
                                    <img src="{{'/uploads/screenshots/'.$screenshot['screenshot2']}}" height="300px" class="card-img-top"/>
                                </div>
                            </div>
                            <div class="mx-2" style="background: pink">
                                <div class="card">
                                    <img src="{{'/uploads/screenshots/'.$screenshot['screenshot3']}}" height="300px" class="card-img-top"/>
                                </div>
                            </div>
                            <div class="mx-2" style="background: pink">
                                <div class="card">
                                    <img src="{{'/uploads/screenshots/'.$screenshot['screenshot4']}}" height="300px" class="card-img-top"/>
                                </div>
                            </div>
                            <div class="mx-2" style="background: pink">
                                <div class="card">
                                    <img src="{{'/uploads/screenshots/'.$screenshot['screenshot5']}}" height="300px" class="card-img-top"/>
                                </div>
                            </div>
                            <div class="mx-2" style="background: pink">
                                <div class="card">
                                    <img src="{{'/uploads/screenshots/'.$screenshot['screenshot6']}}" height="300px" class="card-img-top"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- download links -->
            <div class="row mb-5">
                <div class="container" align="center">
                    <div class="d-flex justify-content-between align-items-center px-5 mb-2" style="background:#212121">
                        <h3 class="text-center mt-3 text-white" style="font-family: 'Rubik', sans-serif;">Download Links</h3>
                        <p></p>
                    </div>
                    <a href="{{'/public/download/shawshankredemption.torrent'}}" class="btn btn-danger" download>Download</a>
                </div>
            </div>

            <!-- movie reviews -->
            <div class="row mt-3 mb-5">
                <div class="container">
                    <div class="d-flex justify-content-between align-items-center px-5 mb-2" style="background:#212121">
                        <h3 class="text-center mt-3 text-white" style="font-family: 'Rubik', sans-serif;">Movie Reviews</h3>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Write Review</button>
                        <!-- Modal -->
                        <div class="modal fade" style="background-color: rgba(0,0,0,0.6);" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content bg-dark">
                            <div class="modal-header">
                                <h5 class="modal-title text-white" id="exampleModalLabel">Write Review</h5>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">X</button>
                            </div>
                            <form action="{{url('/movie/review')}}" method="post">@csrf
                                <div class="modal-body text-white">
                                    <div class="form-group mb-2">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" />
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Rating(1 to 5)</label>
                                        <input type="text" class="form-control" name="rating" />
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Review</label>
                                        <textarea rows="3" class="form-control" name="review"></textarea>
                                    </div>
                                    <input type="hidden" name="movie_id" value="{{$id}}" />
                                </div>
                                <div class="modal-footer" style="border:none">
                                    <button type="submit" class="btn btn-danger">Save Review</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row px-5">
                        @if(App\Models\MovieReview::where('movie_id',$id)->get()->count() == 0)
                        <p class="mt-4" style="font-size:20px;font-family: 'Rubik', sans-serif;">No Reviews Yet. Be the first to write the Review!</p>
                        @endif
                        @foreach(App\Models\MovieReview::where('movie_id',$id)->get() as $review)
                        <div class="d-flex flex-row bg-dark text-white py-3 border-bottom">
                            <img src="/user.png" class="rounded-circle" height="150px" width="150px">&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="mt-2">
                                <p>
                                    @switch($review['rating'])
                                        @case('1')
                                            <div style="color:yellow"><i class="fa-solid fa-star"></i></div>
                                            @break
                                        @case('2')
                                            <div style="color:yellow"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                            @break
                                        @case('3')
                                            <div style="color:yellow"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                            @break
                                        @case('4')
                                            <div style="color:yellow"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                            @break
                                        @case('5')
                                            <div style="color:yellow"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                                            @break
                                        @default
                                            <p>0 Rating</p>
                                    @endswitch
                                </p>
                                <h4 style="font-family: 'Rubik', sans-serif;">{{$review['name']}}</h4>
                                <p style="font-family: 'Poppins', sans-serif;">{{$review['review']}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

    </div>
</div>


@stop
