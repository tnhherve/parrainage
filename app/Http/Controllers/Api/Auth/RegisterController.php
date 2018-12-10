<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\Route;


class RegisterController extends Controller
{
    private $client;

    public function __construct()
    {
    	$this->client = Client::find(1);
    }

	public function register(Request $request){
		$this->validate($request, [
			'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'telephone' => ['required', 'int'],
            'option' => ['required'],
            'niveau' => ['required'],
            'cycle' => ['required']
		]);

		$user = User::create([
			'name' => $request->get('name'),
			'email' => $request->get('email'),
			'password' => bcrypt('password'),
			'telephone' => $request->get('telephone'),
			'cycle' => $request->get('cycle'),
			'option' => $request->get('option'),
			'niveau' => $request->get('niveau')
			
		]);

		$params = [
			'grant_type'=> 'password',
			'client_id' => $this->client->id,
			'client_secret'=> $this->client->secret,
			'username'=> $request->get('email'),
			'password'=> $request->get('password'),
			'scope'=> '*'
		];

		$request->request->add($params);
		$proxy = Request::create('oauth/token','POST');

		return Route::dispatch($proxy);
	}

}
