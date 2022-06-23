<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\Models\RequestModel;
use App\Models\Movie;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hollywood',function(){
    $movies = (new Movie)::where('label','hollywood')->simplePaginate(9);
    $count = (new Movie)::where('label','hollywood')->get()->count();
    return view('hollywood',['movies'=>$movies,'count'=>$count]);
});

Route::get('/bollywood',function(){
    $movies = (new Movie)::where('label','bollywood')->simplePaginate(9);
    $count = (new Movie)::where('label','bollywood')->get()->count();
    return view('bollywood',['movies'=>$movies,'count'=>$count]);
});

Route::match(['get','post'],'/search',function(Request $request){
    if($request->isMethod('post')){
        $search = $request->get('search');
        $movies = (new Movie)::where('title', 'like', '%'.$search.'%')->simplePaginate(12);
        $count = (new Movie)::where('title', 'like', '%'.$search.'%')->get()->count();
        return view('search',['movies'=>$movies,'search'=>$search,'count' =>$count]);
    }
    return view('search');
});

Route::match(['get','post'],'/request',function(Request $request){
    if($request->isMethod('post')){
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'query' => $request->get('query')
        ];
        (new RequestModel)::create($data);
        return redirect()->to('/');
    }
    return view("request");
});

// category routes
Route::prefix('category')->group(function(){
    Route::match(['get','post'],'/create',[App\Http\Controllers\CategoryController::class,'create']);
    Route::get('/view',[App\Http\Controllers\CategoryController::class,'view']);
    Route::match(['get','post'],'/update/{id}',[App\Http\Controllers\CategoryController::class,'update']);
    Route::get('/delete/{id}',[App\Http\Controllers\CategoryController::class,'delete']);
    Route::get("/{id}/{label}",[App\Http\Controllers\CategoryController::class,'single']);
});

//movie routes
Route::prefix('movie')->group(function(){
    Route::match(['get','post'],'/create',[App\Http\Controllers\MovieController::class,'create']);
    Route::get('/view',[App\Http\Controllers\MovieController::class,'view']);
    Route::match(['get','post'],'/update/{id}',[App\Http\Controllers\MovieController::class,'update']);
    Route::get('/delete/{id}',[App\Http\Controllers\MovieController::class,'delete']);
    Route::get('/single/{id}',[App\Http\Controllers\MovieController::class,'single']);
    Route::post('/review',[App\Http\Controllers\MovieController::class,'movieReview']);
    Route::get('/requested',[App\Http\Controllers\MovieController::class,'requested']);
    Route::get('/requested/delete/{id}',[App\Http\Controllers\MovieController::class,'deleteRequestedMovie']);
});

// movie screenshot routes
Route::prefix('screenshot')->group(function(){
    Route::match(['get','post'],'/create',[App\Http\Controllers\MovieController::class,'createScreenshot']);
    Route::get('/view',[App\Http\Controllers\MovieController::class,'viewScreenshot']);
});

// movie screenshot routes
Route::prefix('topcast')->group(function(){
    Route::match(['get','post'],'/create',[App\Http\Controllers\MovieController::class,'createTopcast']);
    Route::get('/view',[App\Http\Controllers\MovieController::class,'viewTopcast']);
});


//admin routes
Route::prefix('admin')->group(function(){
    Route::match(['get','post'],'/',[App\Http\Controllers\AdminController::class,'login']);
    Route::get('/dashboard',function(){
        $login = session('login');
        if($login == 'true'){
            return view('admin.dashboard2');
        }else{
            return redirect()->to('/admin');
        }
    });
    Route::get('/logout',[App\Http\Controllers\AdminController::class,'logout']);
});
