@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>
                               @if(Session::has('message'))
                               <p class="alert alert-success">{{Session::get('message')}} </p>
                               
                               
                               @endif
				<div class="panel-body">
                                    
                                     
                                    {!!Form::open(['route'=>'admin.users.index','method'=>'GET','class'=>'navbar-form navbar-left pull-right role="search" '])!!}

                                        <div class="form-group">
                                            {!!Form::text('name', null,['class'=>'form-control',' placeholder'=>'Introduzca su Busqueda'])!!}
                                            {!!Form::select('type',config('options.types'), null, ['class'=>'form-control'])!!}
                                  
                                        </div>
                                        <button type="submit" class="btn btn-info">Buscar</button>
                                        
                                     {!!Form::close()!!}
                                    
                                    <p> 
                                        <a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">Crear Nuevo Usuario</a>
                                    </p>
                                     <p>Hay {{$users->total() }} usuarios registrados</p>
                                   
					 @include('admin.users.partials.table')
                                          
                                    {!! $users->appends(Request::only(['name','type']))->setPath('')->render()!!}
                                     
				</div>
                                
			</div>
		</div>
	</div>
</div>
    

@endsection



