                                    <table class="table table-striped">
                                            <tr>
                                              <th>#</th>
                                              <th>Nombre</th>
                                              <th>Email</th>
                                              <th>Rol</th>
                                              <th>Acciones</th>
                                            </tr>
                                            @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->id}}</td>
                                                <td>{{ $user->first_name}}</td>
                                                <td>{{ $user->email}}</td>
                                                <td>{{ $user->type}}</td>
                                                <td>
                                                    
                                                    <a href="{{route('admin.users.edit',$user->id)}}">actualizar</a>
                                                    <a href="#">eliminar</a>
                                                   

                                                </td>  

                                            </tr>
                                            @endforeach

                                            </table >