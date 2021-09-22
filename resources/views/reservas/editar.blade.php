<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Reservar clientes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

<form method="POST" action="/reservas/{{$reserva->id}}">
    @csrf
    <input type="text" name="nombre" value="{{$reserva->fecha}}">
    <input type="text" name="servicio" value="{{$reserva->servicio}}">
    <input type="text" name="num_personas" value="{{$reserva->num_personas}}">
    <input type="text" name="estado" value="{{$reserva->estado}}">
    <input type="submit" name="submit" value="Actualizar">
    @method('PUT')
</form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
