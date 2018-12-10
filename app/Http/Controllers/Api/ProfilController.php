<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index(){
    	$profils = Auth::user()->profil()->get();
  
    	return response()->json(['data'=>$profils],201,[],JSON_NUMERIC_CHECK);
    }
}
