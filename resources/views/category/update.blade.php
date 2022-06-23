@extends('admin.dashboard')
@section('right')

<div class="container-fluid">
    <div class="container px-5">
        <div class="row px-5">
            <h1 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">Update Category</h1>
            <form action="{{url('/category/update/'.$id)}}" method="post">@csrf
                <div class="form-group mb-2">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{$category['title']}}" />
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@stop
