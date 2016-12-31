<?php namespace Course\Http\Controllers;

use Course\Http\Controllers\Controller;
use Course\User;
use Course\Http\Requests\CreateUserRequest;
use Course\Http\Requests\EditUserRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}
        
        public function inicio(Request $request)
	{
            
            $users= User::name($request->get('name'))->type($request->get('type'))->orderBy('id','DESC')->paginate(10);
                        
            return view('inicio', compact('users'));
            
            
	}
        
        
}
