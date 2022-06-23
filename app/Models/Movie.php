<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Screenshot;
use App\Models\Topcast;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['title','category','release_date','about','imdb_rating','label','trailer','image','audio','subtitle','director'];

    public function screenshot(){
        return $this->hasMany(Screenshot::class,'movie_id','id');
    }

    public function topcast(){
        return $this->hasMany(Topcast::class,'movie_id','id');
    }
}
