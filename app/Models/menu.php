<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;
    public $fillable = ['title', 'price', 'weight', 'meat', 'about'];

    public function restaurants(){
        return $this->hasMany('App\Models\restaurant');
    }
}
