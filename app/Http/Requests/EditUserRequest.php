<?php namespace Course\Http\Requests;

use Course\Http\Requests\Request;
use Illuminate\Routing\Route;

class EditUserRequest extends Request {

	
        public function __construct(Route $route) {
            
            $this->route=$route;
        }


        public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		      'first_name'=>'required',
                      'last_name'=> 'required',
                      'email'=>'required|unique:users,email,'.$this->route->getParameter('users'),
                      'password'=>'required',
                     'type'=>'required|in:administrador,editor,colaborador,usuario',
		];
	}

}
