<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Screenshot;
use App\Models\Topcast;
use App\Models\MovieReview;
use App\Models\RequestModel;

class MovieController extends Controller
{
    public $model;
    public function __construct(){
        $this->model = (new Movie);
    }

    public function create(Request $request){
        if($request->isMethod('post')){
            $file = $request->file('image');
            $destination = 'uploads/movies';
            if($file->move($destination,$file->getClientOriginalName())){
                $data = [
                    'title' => $request->get('title'),
                    'category' => $request->get('category'),
                    'release_date' => $request->get('release_date'),
                    'about' => $request->get('about'),
                    'imdb_rating' => $request->get('imdb_rating'),
                    'trailer' => $request->get('trailer'),
                    'audio' => $request->get('audio'),
                    'subtitle' => $request->get('subtitle'),
                    'director' => $request->get('director'),
                    'image' => $file->getClientOriginalName(),
                    'label' => $request->get('label')
                ];
                $result = $this->model::create($data);
                if($result){
                    return redirect()->to('/movie/create')->with('message','Movie created successfully');
                }else{
                    return redirect()->to('/movie/create')->with('message','Error occurred');
                }
            }
        }
        $login = session('login');
        if($login == 'true'){
            return view('movie.create');
        }else{
            return redirect()->to('/admin');
        }
    }

    public function view(){
        $login = session('login');
        if($login == 'true'){
            $movies = $this->model::get();
            return view('movie.view',['movies' => $movies]);
        }else{
            return redirect()->to('/admin');
        }
    }

    public function update($id, Request $request){
        if($request->isMethod('post')){

            $result = $this->model::where('id',$id)->get();
            $movie = $result[0]->getOriginal();

            $file = $request->file('image');
            if($file){
                $destination = 'uploads/movies';
                $file->move($destination,$file->getClientOriginalName());
                $image = $file->getClientOriginalName();
            }else{
                $image = $movie['image'];
            }
            $data = [
                'title' => $request->get('title'),
                'category' => $request->get('category'),
                'release_date' => $request->get('release_date'),
                'about' => $request->get('about'),
                'imdb_rating' => $request->get('imdb_rating'),
                'trailer' => $request->get('trailer'),
                'audio' => $request->get('audio'),
                'subtitle' => $request->get('subtitle'),
                'director' => $request->get('director'),
                'image' => $image,
                'label' => $request->get('label')
            ];
            $result = $this->model::where('id',$id)->update($data);
            if($result){
                return redirect()->to('/movie/create')->with('message','Movie created successfully');
            }else{
                return redirect()->to('/movie/create')->with('message','Error occurred');
            }
        }
        $login = session('login');
        if($login == 'true'){
            $result = $this->model::where('id',$id)->get();
            $movie = $result[0]->getOriginal();
            return view('movie.update',['movie' => $movie,'id'=>$id]);
        }else{
            return redirect()->to('/admin');
        }
    }

    public function delete($id){
        $this->model::where('id',$id)->delete();
        return redirect()->to('/movie/view')->with('message','Movie deleted successfully');
    }

    public function single($id){
        $result = $this->model::where('id',$id)->get();
        $movie = $result[0]->getOriginal();
        $result2 =  $this->model::find($id)->screenshot;
        $screenshot = $result2[0]->getOriginal();
        $topcasts = $this->model::find($id)->topcast;
        return view('movie.single',['movie' => $movie,'id' => $id,'screenshot' => $screenshot,'topcasts' => $topcasts]);
    }

    public function createScreenshot(Request $request){
        if($request->isMethod('post')){

            $screenshot1 = $request->file('screenshot1');
            $screenshot2 = $request->file('screenshot2');
            $screenshot3 = $request->file('screenshot3');
            $screenshot4 = $request->file('screenshot4');
            $screenshot5 = $request->file('screenshot5');
            $screenshot6 = $request->file('screenshot6');

            $destination = 'uploads/screenshots';
            $screenshot1->move($destination,$screenshot1->getClientOriginalName());
            $screenshot2->move($destination,$screenshot2->getClientOriginalName());
            $screenshot3->move($destination,$screenshot3->getClientOriginalName());
            $screenshot4->move($destination,$screenshot4->getClientOriginalName());
            $screenshot5->move($destination,$screenshot5->getClientOriginalName());
            $screenshot6->move($destination,$screenshot6->getClientOriginalName());

            $data = [
                'screenshot1' => $screenshot1->getClientOriginalName(),
                'screenshot2' => $screenshot2->getClientOriginalName(),
                'screenshot3' => $screenshot3->getClientOriginalName(),
                'screenshot4' => $screenshot4->getClientOriginalName(),
                'screenshot5' => $screenshot5->getClientOriginalName(),
                'screenshot6' => $screenshot6->getClientOriginalName(),
                'movie_id' => $request->get('movie_id')
            ];
            (new Screenshot)::create($data);
            return redirect()->to('/screenshot/create')->with('message','Screenshot created successfully');
        }
        $login = session('login');
        if($login == 'true'){
            return view('screenshot.create');
        }else{
            return redirect()->to('/admin');
        }
    }

    public function viewScreenshot(){
        $login = session('login');
        if($login == 'true'){
            $screenshots = (new Screenshot)::get();
            return view('screenshot.view',['screenshots'=> $screenshots]);
        }else{
            return redirect()->to('/admin');
        }
    }

    public function createTopcast(Request $request){
        if($request->isMethod('post')){
            $file = $request->file('image');
            $destination = 'uploads/topcast';
            $file->move($destination,$file->getClientOriginalName());
            $data = [
                'movie_id' => $request->get('movie_id'),
                'image' => $file->getClientOriginalName(),
                'name' => $request->get('name'),
                'role' => $request->get('role')
            ];
            (new Topcast)::create($data);
            return redirect()->to('/topcast/create')->with('message','Topcast created successfully');
        }
        $login = session('login');
        if($login == 'true'){
            return view('topcast.create');
        }else{
            return redirect()->to('/admin');
        }
    }

    public function viewTopcast(){
        $login = session('login');
        if($login == 'true'){
            $topcasts = (new Topcast)::get();
            return view('topcast.view',['topcasts' => $topcasts]);
        }else{
            return redirect()->to('/admin');
        }
    }

    public function movieReview(Request $request){
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'rating' => $request->get('rating'),
            'review' => $request->get('review'),
            'movie_id' => $request->get('movie_id')
        ];
        $movie_id = $request->get('movie_id');
        (new MovieReview)::create($data);
        return redirect()->to('/movie/single/'.$movie_id);
    }

    public function requested(){
        $login = session('login');
        if($login == 'true'){
        $movies = (new RequestModel)::get();
        return view('movie.requested',['movies' =>$movies]);
        }else{
            return redirect()->to('/admin');
        }
    }

    public function deleteRequestedMovie($id){
        (new RequestModel)::where('id',$id)->delete();
        return redirect()->to('/movie/requested')->with('message','Requested Movie Deleted Successfully');
    }
}
