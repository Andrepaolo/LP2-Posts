<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //Categoria tiene muchos Posts
    // Rela de 1 a *
    public function posts(){
        return $this->hasMany(Post::class);
    }
}

