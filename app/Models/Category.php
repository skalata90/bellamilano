<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function menus(){
    	return $this->hasMany("App\Models\Menu");
    }
}