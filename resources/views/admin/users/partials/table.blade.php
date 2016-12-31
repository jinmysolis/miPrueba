                                    <table class="table table-striped">
                                            <tr>
                                              <th>#</th>
                                              <th>Nombre</th>
                                              <th>Email</th>
                                              <th>Rol</th>
                                              <th class="col-sm-2">Actualizar</th>
                                             
                                            </tr>
                                            @foreach($users as $user)
                                            <tr>
                                                <td >{{ $user->id}}</td>
                                                <td>{{ $user->first_name}}</td>
                                                <td>{{ $user->email}}</td>
                                                <td>{{ $user->type}}</td>
                                                <td colspan="1">
                                                    
<!--                                                    <a href="{{route('admin.users.edit',$user->id)}} ">actualizar</a>-->
                                                    <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-info" role="button">Actualizar</a>
                                                 
                                                     <td>@include('admin.users.partials.delete')</td>

                                                
                                            @endforeach

                                            </table >