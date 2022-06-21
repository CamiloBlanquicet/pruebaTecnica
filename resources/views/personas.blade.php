<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Registrar Persona') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session()->get('error'))
                    <div class="alert alert-danger">
                        {{session()->get('error')}}
                    </div>
                    @endif

                    
                    <form method="POST" action="{{ route('personas.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Camilo" maxlength="20" required>
                        </div>
    
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                          <input type="text" class="form-control" name="apellido" placeholder="Rodriguez" maxlength="20" required>
                        </div>
    
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Correo</label>
                            <input type="email" class="form-control" name="correo" placeholder="nombre@ejemplo.com" max="20" required>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="check" name="terminos" required>
                            <label class="form-check-label" for="flexCheckDefault">
                                Declaro haber leido y aceptar las condiciones generales del programa y la normativa sobre protección de datos
                            </label>
                          </div>
    
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>

                    </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
