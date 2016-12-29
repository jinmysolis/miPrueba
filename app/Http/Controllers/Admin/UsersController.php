<?php namespace Course\Http\Controllers\Admin;

//use Course\Http\Requests;
use Course\Http\Controllers\Controller;
use Course\User;
use Illuminate\Support\Facades\Validator;

//use Illuminate\Http\Request;



use Illuminate\Support\Facades\Request;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users= User::paginate(5);
                        
               return view('admin.users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		 return view('admin.users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		  $data= Request::all();
                  $rules= array(
                      'first_name'=>'required',
                      'last_name'=> 'required',
                      'email'=>'required|email|unique:users,email',
                      'password'=>'required',
                      'type'=>'required|in:user,admin',
                      
                      );
                 $v= Validator::make($data, $rules);
                  if ($v->fails())
                  {
                      return redirect()->back()
                              ->withErrors($v->errors())
                              ->withInput(Request::except('password'));
                  }
                  
                  $user= User::create($data);
                  return redirect()->route('admin.users.index');
                  
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
                return view('admin.users.edit',compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
                
	{
            
             $data= Request::all();
                  $rules= array(
                      'first_name'=>'required',
                      'last_name'=> 'required',
                      'email'=>'required|email',
                      'password'=>'required',
                      'type'=>'required',
                      
                      );
                 $v= Validator::make($data, $rules);
                  if ($v->fails())
                  {
                      return redirect()->back()
                              ->withErrors($v->errors())
                              ->withInput(Request::except('password'));
                  }
            
            
            
            
            
            
		$user = User::findOrFail($id);
                $user->fill(Request::all());
                $user->save();
                return redirect()->route('admin.users.index');
               
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
