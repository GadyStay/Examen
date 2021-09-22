<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Reservas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Servicio</th>
                            <th>Num_Personas</th>
                            <th>Estado</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($reservas as $reserva)
                            <tr>
                                <td>{{$reserva->id}}</td>
                                <td>{{$reserva->fecha}}</td>
                                <td>{{$reserva->servicio}}</td>
                                <td>{{$num_personas}}</td>
                                <td>{{$estado}}</td>

                                <td><a href='cursos/{{$reserva->id}}/edit'>Actualizar</a></td>

                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
