{!!Form::open(['route'=>['admin.users.destroy',$user->id],'method'=>'DELETE'])!!}
                                  
<!--   @include('admin.users.partials.formulario')-->
                                   
<button type="submit" onclick="return confirm('Seguro desea eliminar elusuario ')"  class="btn btn-danger">Eliminar Usuario</button>
                                   
 {!!Form::close()!!}