
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

                    <form method="POST" action="/reservas">
                        @csrf
                        <input type="text" name="fecha" placeholder="Ingrese Fecha" value="{{old("fecha")}}">
                        <input type="text" name="servicio" placeholder="Ingrese Servicio" value="{{old("servicio")}}">
                        <input type="text" name="num_persona" placeholder="Ingrese Numero de Personas" value="{{old("num_persona")}}">
                        <input type="text" name="estado" placeholder="Ingrese Esatdo" value="{{old("estado")}}">
                        <input type="submit" name="submit" value="Reservar">

                    </form>

                    @if($errors->ant())
                        <div style="color: red">
                            @foreach($errors->all() as $error)
                                {{$error}}<br>
                            @endforeach
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


