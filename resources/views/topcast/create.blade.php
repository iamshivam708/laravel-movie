@extends('admin.dashboard')
@section('right')

<div class="container-fluid">
    <div class="container px-5 mt-3">
        @if(Session::has('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{Session::get('message')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row px-5">
            <h1 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">Create Topcast</h1>
            <form action="{{url('/topcast/create')}}" method="post" enctype="multipart/form-data">@csrf
                <div class="form-group mb-2">
                    <label>Movie ID</label>
                    <select class="form-control" name="movie_id">
                        @foreach(App\Models\Movie::get() as $movie)
                            <option value="{{$movie['id']}}">{{$movie['title']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" />
                </div>
                <div class="form-group mb-2">
                    <label>Real Name</label>
                    <input type="text" class="form-control" name="name" />
                </div>
                <div class="form-group mb-2">
                    <label>Role in Movie</label>
                    <input type="text" class="form-control" name="role" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@stop
