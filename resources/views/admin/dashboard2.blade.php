@extends('admin.dashboard')
@section('right')

<div class="container-fluid">
    <div class="container">
        <h3 class="text-center py-2 bg-dark text-white" style="font-family: 'Rubik', sans-serif;">Admin Dashboard</h3>
        <div class="row mt-4" align="center">
            <div class="col-5 bg-dark py-5 text-white mx-4">
                <?php
                    $count = App\Models\Movie::get()->count();
                ?>
                <i class="fa-solid fa-clapperboard fa-8x"></i>
                <p style="font-size: 20px;font-family: 'Rubik', sans-serif;">Total Movies</p>
                <h1 style="font-family: 'Rubik', sans-serif;">{{$count}}</h1>
            </div>
            <div class="offset-1 col-5 bg-dark py-5 text-white">
                <?php
                    $countCategory = App\Models\Category::get()->count();
                ?>
                <i class="fa-solid fa-arrow-down-wide-short fa-8x"></i>
                <p style="font-size: 20px;font-family: 'Rubik', sans-serif;">Total Categories</p>
                <h1 style="font-family: 'Rubik', sans-serif;">{{$countCategory}}</h1>
            </div>
        </div>
    </div>
</div>

@stop
