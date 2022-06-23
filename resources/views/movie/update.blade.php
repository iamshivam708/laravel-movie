@extends('admin.dashboard')
@section('right')

<div class="container-fluid">
    <div class="container px-5">
        @if(Session::has('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{Session::get('message')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row px-5">
            <h1 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">Update Movie</h1>
            <form enctype="multipart/form-data" action="{{url('/movie/update/'.$id)}}" method="post">@csrf
                <div class="form-group mb-2">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" />
                </div>
                <div class="form-group mb-2">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title"  value="{{$movie['title']}}" />
                </div>
                <div class="form-group mb-2">
                    <label>Trailer</label>
                    <input type="text" class="form-control" name="trailer" value="{{$movie['trailer']}}" />
                </div>
                <div class="form-group mb-2">
                    <label>Category</label>
                    <select class="form-control" name="category">
                        <option value="{{$movie['title']}}">{{$movie['title']}}(current)</option>
                    @foreach(App\Models\Category::get() as $cat)
                        <option value="{{$cat['title']}}">{{$cat['title']}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label>About</label>
                    <textarea rows="3" class="form-control" name="about">{{$movie['about']}}</textarea>
                </div>
                <div class="form-group mb-2">
                    <label>Release Date</label>
                    <input type="text" class="form-control" name="release_date" value="{{$movie['release_date']}}" />
                </div>
                <div class="form-group mb-2">
                    <label>Label</label>
                    <select class="form-control" name="label">
                        <option value="{{$movie['label']}}">{{$movie['label']}}(current)</option>
                        <option value="hollywood">Hollywood Movie</option>
                        <option value="bollywood">Bollywood Movie</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label>IMDB Rating (Out of 10)</label>
                    <input type="text" class="form-control" name="imdb_rating" value="{{$movie['imdb_rating']}}" />
                </div>
                <div class="form-group mb-2">
                    <label>Audio</label>
                    <input type="text" class="form-control" name="audio" value="{{$movie['audio']}}" />
                </div>
                <div class="form-group mb-2">
                    <label>Subtitle</label>
                    <input type="text" class="form-control" name="subtitle" value="{{$movie['subtitle']}}" />
                </div>
                <div class="form-group mb-2">
                    <label>Director</label>
                    <input type="text" class="form-control" name="director" value="{{$movie['director']}}" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@stop
