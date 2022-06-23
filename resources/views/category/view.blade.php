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
            <h3 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">All Categories</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $cat)
                    <tr>
                        <td>{{$cat['id']}}</td>
                        <td>{{$cat['title']}}</td>
                        <td><a href="{{url('/category/update/'.$cat['id'])}}" class="btn btn-primary">Edit</a></td>
                        <td><a href="{{url('/category/delete/'.$cat['id'])}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row py-3 px-5" align="center">
            {{ $categories->links() }}
        </div>
    </div>
</div>

@stop
