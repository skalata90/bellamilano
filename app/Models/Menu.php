<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    //
    public function categories(){
    	return $this->belongsTo("App\Models\Category");
    }

    protected $fillable = ['name','content','price','category_id'];
}