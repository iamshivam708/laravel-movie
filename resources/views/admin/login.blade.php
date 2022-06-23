@extends('layouts.admin')
@section('content')

<div class="container-fluid" style="height: 100vh; background:#212121;">
    <div class="container px-5 py-5 d-flex justify-content-center">
        <div class="row px-5 py-5 bg-dark mt-5">
            @if(Session::has('message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('message')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <h3 class="text-center mb-3 text-white"><u>Administration Login</u></h3>
            <form action="{{url('/admin')}}" method="post">@csrf
                <div class="mb-2">
                    <label class="text-white">Email</label>
                    <input type="text" class="form-control" name="email" />
                </div>
                <div class="mb-2">
                    <label class="text-white">Password</label>
                    <input type="text" class="form-control" name="password" />
                </div>
                <div class="mt-4" align="center">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
