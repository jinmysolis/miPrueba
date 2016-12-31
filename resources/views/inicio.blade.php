@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios Registrados</div>
                               @if(Session::has('message'))
                               <p class="alert alert-success">{{Session::get('message')}} </p>
                               
                               
                               @endif
				<div class="panel-body">
                                    <p>
                                     <button class="btn btn-primary" type="button">
                                           Usuarios Registrados <span class="badge">{{$users->total() }}</span>
                                     </button>
                                    
                                     <button class="btn btn-primary" type="button">
                                           Usuarios Registrados <span class="badge">{{$users->count() }}</span>
                                     </button>
                                   
                                   </p>
					 
                                   
                                   
                                   <div class="jumbotron">
                                    <h1>Hola Juan!</h1>
                                    <p><table class="table table-hover">
                                            <tr  class="danger">
                                              <th>#</th>
                                              <th>Nombre</th>
                                              <th>Email</th>
                                              <th>Rol</th>
                                              
                                             
                                            </tr>
                                            @foreach($users as $user)
                                            <tr class="success">
                                                <td class="info">{{ $user->id}}</td>
                                                <td >{{ $user->first_name}}</td>
                                                <td class="danger">{{ $user->email}}</td>
                                                <td class="warning">{{ $user->type}}</td>
                                               
                                                    
                                                   
                                                   

                                                
                                            @endforeach

                                            </table >...</p>
                                   <center>  {!! $users->appends(Request::only(['name','type']))->setPath('')->render()!!}</center> 
                                  </div>
                                   
                                   
                                   
                                   
                                   
                                          
                                  
                                     
                                    
                                                
                                    
                                    
				</div>
                                
			</div>
		</div>
	</div>
</div>
    

@endsection



