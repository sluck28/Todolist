<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}
        </h2>
        @if (session()->has('mensaje'))
            <div class="uppercase border border-green-600 bg-green-100 text-green-600  font-bold p-2 my-3">
                {{ session('mensaje') }}
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-5xl flex justify-center  font-bold">
                    Mis tareas
                </div>

            

                    <livewire:mostrar-tarea />
                
            </div>
        </div>
    </div>
</x-app-layout>
