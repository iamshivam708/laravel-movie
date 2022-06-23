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
            <h3 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">All Requested Movies</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Query</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movie)
                    <tr>
                        <td>{{$movie['id']}}</td>
                        <td>{{$movie['name']}}</td>
                        <td>{{$movie['email']}}</td>
                        <td>{{$movie['query']}}</td>
                        <td><a href="{{url('/movie/requested/delete/'.$movie['id'])}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
