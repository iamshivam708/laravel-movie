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
        <div class="row py-5">
            <h3 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">All Screenshots</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Movie</th>
                        <th>Screenshot1</th>
                        <th>Screenshot2</th>
                        <th>Screenshot3</th>
                        <th>Screenshot4</th>
                        <th>Screenshot5</th>
                        <th>Screenshot6</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($screenshots as $ss)
                    <tr>
                        <td>{{$ss['id']}}</td>
                        <td>{{$ss['movie_id']}}</td>
                        <td>
                            <img src="{{'/uploads/screenshots/'.$ss['screenshot1']}}" height="150px" width="200px">
                        </td>
                        <td>
                            <img src="{{'/uploads/screenshots/'.$ss['screenshot2']}}" height="150px" width="200px">
                        </td>
                        <td>
                            <img src="{{'/uploads/screenshots/'.$ss['screenshot3']}}" height="150px" width="200px">
                        </td>
                        <td>
                            <img src="{{'/uploads/screenshots/'.$ss['screenshot4']}}" height="150px" width="200px">
                        </td>
                        <td>
                            <img src="{{'/uploads/screenshots/'.$ss['screenshot5']}}" height="150px" width="200px">
                        </td>
                        <td>
                            <img src="{{'/uploads/screenshots/'.$ss['screenshot6']}}" height="150px" width="200px">
                        </td>
                        <td><a href="{{url('/category/update/'.$ss['id'])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{url('/category/delete/'.$ss['id'])}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
