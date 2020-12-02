<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    use HasFactory;
    public $fillable = ['title', 'customers', 'employees', 'menu_id'];

    public function menu(){
        return $this->belongsTo('App\Models\menu');
    }
}
