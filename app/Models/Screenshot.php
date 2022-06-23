<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Screenshot extends Model
{
    use HasFactory;
    protected $fillable = ['screenshot1','screenshot2','screenshot3','screenshot4','screenshot5','screenshot6','movie_id'];

    public function movie(){
        return $this->belongsTo(Movie::class,'id');
    }

}
