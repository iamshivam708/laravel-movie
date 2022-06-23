<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Movie;

class CategoryController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = (new Category);
    }

    public function view(){
        $login = session('login');
        if($login == 'true'){
            $categories = $this->model::simplePaginate(5);
            return view('category.view',['categories' => $categories]);
        }else{
            return redirect()->to('/admin');
        }
    }

    public function create(Request $request){
        if($request->isMethod('post')){
            $data = [
                'title' => $request->get('title')
            ];
            $this->model::create($data);
            return redirect()->to('/category/create')->with('message','Category Created Successfully');
        }
        $login = session('login');
        if($login == 'true'){
            return view('category.create');
        }else{
            return redirect()->to('/admin');
        }
    }

    public function update($id, Request $request){
        if($request->isMethod('post')){
            $data = [
                'title' => $request->get('title')
            ];
            $this->model::where('id',$id)->update($data);
            return redirect()->to('/category/view')->with('message','Category Updated Successfully');
        }
        $login = session('login');
        if($login == 'true'){
            $result = $this->model::where('id',$id)->get();
            $category = $result[0]->getOriginal();
            return view('category.update',['category' => $category,'id' => $id]);
        }else{
            return redirect()->to('/admin');
        }
    }

    public function delete($id){
        $this->model::where('id',$id)->delete();
        return redirect()->to('/category/view')->with('message','Category Deleted Successfully');
    }

    public function single($id,$label){
        $result = $this->model::where('id',$id)->get();
        $category = $result[0]->getOriginal();
        $movies = (new Movie)::where('category',$category['title'])->where('label',$label)->simplePaginate(12);
        $count = (new Movie)::where('category',$category['title'])->where('label',$label)->get()->count();
        return view('category',['movies' => $movies,'category' => $category['title'],'count' => $count,'label'=>$label]);
    }
}
