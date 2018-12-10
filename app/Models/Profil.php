<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profil extends Model
{
    
    public function user(){
    	return $this->belongsTo(User::class);
    }
}
