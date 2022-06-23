@extends('admin.dashboard')
@section('right')

<div class="container-fluid">
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>{{Session::get('message')}}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row">
            <h3 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">All Movies</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>About</th>
                        <th>Label</th>
                        <th>Release Date</th>
                        <th>IMDB Rating</th>
                        <th>Trailer</th>
                        <th>Audio</th>
                        <th>Subtitle</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movie)
                    <tr>
                        <td>{{$movie['id']}}</td>
                        <td><img src="{{'/uploads/movies/'.$movie['image']}}" height="150px" width="100px" /></td>
                        <td>{{$movie['title']}}</td>
                        <td>{{$movie['category']}}</td>
                        <td>{{$movie['about']}}</td>
                        <td>{{$movie['label']}}</td>
                        <td>{{$movie['release_date']}}</td>
                        <td>{{$movie['imdb_rating']}}</td>
                        <td>{{$movie['trailer']}}</td>
                        <td>{{$movie['audio']}}</td>
                        <td>{{$movie['subtitle']}}</td>
                        <td><a href="{{url('/movie/update/'.$movie['id'])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{url('/movie/delete/'.$movie['id'])}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
