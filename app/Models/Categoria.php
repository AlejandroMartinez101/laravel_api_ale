<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre'];
    public function peticiones(){

        return $this->hasMany('App\Models\Peticione');
    }
    use HasFactory;
}
