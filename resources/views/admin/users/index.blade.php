@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios</div>

				<div class="panel-body">
                                    <p>
                                       
                                        <a class="btn btn-info" href="{{route('admin.users.create')}}" role="button">Crear Nuevo Usuario</a>
                                    </p>
                                     <p>Hay {{$users->total() }} usuarios registrados</p>
                                   
					 @include('admin.users.partials.table')
                                          
                                    {!! $users->setPath('')->render()!!}
                                     
				</div>
                                
			</div>
		</div>
	</div>
</div>
@endsection
