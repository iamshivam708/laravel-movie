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
        <div class="row px-5 py-5">
            <h1 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">Create Screenshot</h1>
            <form action="{{url('/screenshot/create')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="form-group mb-2">
                    <label>Screenshot1</label>
                    <input type="file" class="form-control" name="screenshot1" />
                </div>
                <div class="form-group mb-2">
                    <label>Screenshot2</label>
                    <input type="file" class="form-control" name="screenshot2" />
                </div>
                <div class="form-group mb-2">
                    <label>Screenshot3</label>
                    <input type="file" class="form-control" name="screenshot3" />
                </div>
                <div class="form-group mb-2">
                    <label>Screenshot4</label>
                    <input type="file" class="form-control" name="screenshot4" />
                </div>
                <div class="form-group mb-2">
                    <label>Screenshot5</label>
                    <input type="file" class="form-control" name="screenshot5" />
                </div>
                <div class="form-group mb-2">
                    <label>Screenshot6</label>
                    <input type="file" class="form-control" name="screenshot6" />
                </div>
                <div class="form-group mb-2">
                    <label>Movie ID</label>
                    <select class="form-control" name="movie_id">
                        @foreach(App\Models\Movie::get() as $movie)
                            <option value="{{$movie['id']}}">{{$movie['title']}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@stop
