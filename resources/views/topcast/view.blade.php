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
            <h3 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">All Topcasts</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Movie</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($topcasts as $tc)
                    <tr>
                        <td>{{$tc['id']}}</td>
                        <td>
                            <img src="{{'/uploads/topcast/'.$tc['image']}}" class="rounded-circle" height="80px" width="80px" />
                        </td>
                        <td>
                            <?php
                                $result = App\Models\Topcast::find($tc['movie_id'])->movie;
                                $movie = $result['title'];
                            ?>
                            {{$movie}}
                        </td>
                        <td>{{$tc['name']}}</td>
                        <td>{{$tc['role']}}</td>
                        <td><a href="{{url('/category/update/'.$tc['id'])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{url('/category/delete/'.$tc['id'])}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop
