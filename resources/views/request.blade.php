@extends('layouts.base')
@section('content')

<div class="container-fluid bg-dark">
    <div class="container d-flex justify-content-center py-5">
        <div class="row py-5 px-5">
            <h3 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;"><u>Request a Movie</u></h3>
            <form action="/request" class="text-white" method="post">@csrf
                <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" class="form-control" name="name" />
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" />
                </div>
                <div class="mb-3">
                    <label>Query</label>
                    <textarea class="form-control" rows="3" name="query"></textarea>
                </div>
                <div class="mb-2 text-center mt-3">
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@stop
