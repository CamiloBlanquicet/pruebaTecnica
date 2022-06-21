<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Bienvenido') }}
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
                    
                   <h1>Bienvenido</h1>
                   <p>A continuacion recuerdo los puntos de la prueba:</p>

                   <p>
                    1. Vista un formulario web con los siguientes campos de información:
                    <br>
                    - El nombre, con un control de tipo texto.<br>
                    - Los apellidos, con un control de tipo texto.<br>
                    - El correo electrónico, con un control de tipo texto.<br>
                    - Un numero de control, con un control de tipo numérico.<br>
                    - Una casilla de verificación con el texto "Declaro haber leido y aceptar las condiciones generales del programa y la normativa sobre protección de datos".<br>
                    - Un botón de envío.<br>
                    <br>
                    2. Vista una pagina que permita consultar la informacion registrada en el formulario
                    <br>
                    - Además, tienes que tener en cuenta los siguientes requisitos:
                    <br>
                    - Todos los campos son obligatorios.
                    <br>
                    - La longitud máxima de entrada de datos de los controles para el nombre y los apellidos debe ser 20 caracteres.
                   </p>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
