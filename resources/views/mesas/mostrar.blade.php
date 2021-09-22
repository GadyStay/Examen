<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Estudiantes
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
        <th>Numero</th>
        <th>Capacidad</th>
        <th>&nbsp;</th>
    </tr>

    @foreach($mesas as $mesa)

        <tr>
            <td>{{$curso->id}}</td>
            <td>{{$mesa->numero}}</td>
            <td>{{$mesa->capacidad}}</td>
            <td>
                <form method='post' action='mesas/{{$mesa->id}}'>
                    <input type='submit' value='Eliminar'>
                    @csrf
                    @method("GET")
                </form>
            </td>
        </tr>

    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
