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
            <h1 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">Create Category</h1>
            <form action="{{url('/category/create')}}" method="post">@csrf
                <div class="form-group mb-2">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@stop
