<?php namespace Course\Http\Controllers;
use Course\User;

class UsersController extends Controller {

	public function getOrm()
	{
		$user= User::first();
		dd($user->profile);

    }





	public function getIndex()
	{
		$result= \DB::table('users')
               ->select(['users.first_name','users.last_name'])
               ->where('first_name','jinmy')
		       ->get();
        dd($result);
		return $result;

    }
}

