<?php namespace Course\Http\Controllers\Admin;

//use Course\Http\Requests;
use Course\Http\Controllers\Controller;
use Course\User;
use Course\Http\Requests\CreateUserRequest;
use Course\Http\Requests\EditUserRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;



//use Illuminate\Support\Facades\Request;

class UsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
         * 
         * 
         * 
	 */
    
    
            public function __construct(){
                
                $this->middleware('auth');
            }

	public function index(Request $request)
	{     
                
           
            $users= User::name($request->get('name'))->type($request->get('type'))->orderBy('id','DESC')->paginate(10);
                        
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
	public function store(CreateUserRequest $request)
	{       
                  $user= User::create($request->all());
                  return redirect()->route('admin.users.index');
            
            
            
//                 $v= Validator::make($data, $rules);
//                  if ($v->fails())
//                  {
//                      return redirect()->back()
//                              ->withErrors($v->errors())
//                              ->withInput(Request::except('password'));
//                  }
                  
                  
                  
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
	public function update(EditUserRequest $request, $id)
                
	{
             
		$user = User::findOrFail($id);
                $user->fill($request->all());
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
                $user = User::findOrFail($id);
                $user->delete();
                
                Session::flash('message',$user->first_name . ' Fue Eliminado con exicto');
                return redirect()->route('admin.users.index');
	}

}
