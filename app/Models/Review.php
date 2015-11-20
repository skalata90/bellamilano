<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    public function user(){
    	return $this->belongsTo("App\Models\User");
    }

    protected $fillable = ['content','user_id'];
}