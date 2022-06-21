<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listar Personas') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Gestionar</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                              
                          
                          @foreach ($personas as $persona)
                          <tr>
                            <th scope="row">{{$loop->index}}</th>
                            <td>{{$persona->nombre}}</td>
                            <td>{{$persona->apellido}}</td>
                            <td>{{$persona->correo}}</td>
                            <td class="d-flex justify-content-evenly">
                                                      
                              <form  action="{{ route('personas.destroy', $persona->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Borrar</button>
                              </form>


                              <!-- Boton de la modal -->
                              <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#Modal{{$persona->id}}">Actualizar</button>
                            </td>

                            <!-- Modal de cada persona -->
                            <form action="{{ route('personas.update', $persona->id)}}" method="post">
                              @csrf 
                              @method('PATCH')      
                            <div class="modal fade" id="Modal{{$persona->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Actualizar {{$persona->nombre}} {{$persona->apellido}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                                      <input type="text" class="form-control" name="nombre" placeholder="Camilo" value="{{$persona->nombre}}" required>
                                  </div>
              
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" name="apellido" placeholder="Rodriguez" value="{{$persona->apellido}}" required>
                                  </div>
              
                                  <div class="mb-3">
                                      <label for="exampleFormControlInput1" class="form-label">Correo</label>
                                      <input type="email" class="form-control" name="correo" placeholder="nombre@ejemplo.com" value="{{$persona->correo}}" required>
                                  </div>
                                  <input type="hidden" name="id" value="{{$persona->id}}">
                                  
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </form>

                          </tr>
                          @endforeach
                          
                          
                        </tbody>
                      </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
