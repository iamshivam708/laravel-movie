@extends('layouts.admin')
@section('content')

<div class="container-fluid mt-3">
    <div class="row px-2">
        <div class="col-3 py-3" style="background-color: #212121">
            <h4 class="text-center py-2 mt-2 text-white" style="background-color: #424242">Menus</h4>
            <div class="list-group">
                <a style="background-color: #424242" href="/movie/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0 text-white">Create Movie</h6>
                    </div>
                    </div>
                </a>
                <a style="background-color: #424242" href="/movie/view" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0 text-white">View Movie</h6>
                    </div>
                    </div>
                </a>
                <a style="background-color: #424242" href="/screenshot/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0 text-white">Create Screenshot</h6>
                    </div>
                    </div>
                </a>
                <a style="background-color: #424242" href="/screenshot/view" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0 text-white">View Screenshot</h6>
                    </div>
                    </div>
                </a>
                <a style="background-color: #424242" href="/topcast/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0 text-white">Create Topcasts</h6>
                    </div>
                    </div>
                </a>
                <a style="background-color: #424242" href="/topcast/view" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0 text-white">View Topcasts</h6>
                    </div>
                    </div>
                </a>
            </div>
            <div class="list-group mt-3">
                <a style="background-color: #424242" href="/category/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0 text-white">Create Category</h6>
                    </div>
                    </div>
                </a>
                <a style="background-color: #424242" href="/category/view" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0 text-white">View Category</h6>
                    </div>
                    </div>
                </a>
            </div>
            <div class="list-group mt-3">
                <a style="background-color: #424242" href="/movie/requested" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                    <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0 text-white">View Requested Movies</h6>
                    </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-9">
            @yield('right')
        </div>
    </div>
</div>

@stop
