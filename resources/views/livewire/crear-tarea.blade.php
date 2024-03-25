<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearTarea'>

    <div>
        <x-input-label for="tarea" :value="__('Titulo de la tarea')" />
        {{-- manera de recuperar los datos con la validacion --}}
        <x-text-input placeholder="Tarea" id="tarea" class="block mt-1 w-full" type="text"
            wire:model="title" :value="old('tarea')" />
    </div>
    {{-- mostramos nuestros mensajes de validaciones con livewire --}}
    @error('title')
        {{-- manera de pasarle datos dinamicos a nuestros componentes de livewire --}}
        <livewire:mostrar-alerta :message="$message">
        @enderror
 

        <div>
            <x-input-label for="Prioridad" :value="__('Prioridad')" />
            <select wire:model="priority" id="categoria"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
                <option value=""> --Prioridad tarea -- </option>
                @foreach ($prioridades as $prioridad )                    
                <option value="{{$prioridad}}">{{$prioridad}}</option>
                @endforeach

            </select>
            @error('priority')
            <livewire:mostrar-alerta :message="$message">
            @enderror
        </div>


        <div>
            <x-input-label for="ultimo_dia" :value="__('Fecha de vencimiento')" />
            {{-- manera de recuperar los datos con la validacion --}}
            <x-text-input placeholder="Empresa Ej. Netfliz,_Uber,Didi" id="ultima_dia" class="block mt-1 w-full"
                type="date" wire:model="due_date" :value="old('ultimo_dia')" />
                @error('due_date')
                <livewire:mostrar-alerta :message="$message">
                @enderror
        </div>

        <div>
            <x-input-label for="descripcion" :value="__('Descripcion Tarea')" />
            {{-- manera de recuperar los datos con la validacion --}}
            <textarea wire:model="description" placeholder="Describe la tarea a realizar|"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"
                cols="30" rows="10"></textarea>
                @error('description')
                <livewire:mostrar-alerta :message="$message">
                @enderror
        </div>

    
        <x-primary-button>
            Crear 
        </x-primary-button>
</form>
