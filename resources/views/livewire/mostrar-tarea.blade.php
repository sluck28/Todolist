<div class="flex flex-wrap">
    @foreach ($tareas as $tarea)
        <div class="p-3 w-1/3">
            <div class="max-w-sm rounded overflow-hidden shadow-lg w-full hover:bg-slate-400 h-full">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">
                        <h3>{{ $tarea->title }}</h3>
                        <p class="text-gray-700 text-base" style="max-height: 100px; overflow: hidden;">
                            {{ $tarea->description }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        @if ($tarea->priority === 'alta')
                            <span class="inline-block bg-red-600 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Prioridad: {{ $tarea->priority }}</span>
                        @elseif ($tarea->priority === 'media')
                            <span class="inline-block bg-yellow-600 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Prioridad: {{ $tarea->priority }}</span>
                        @else
                        <span class="inline-block bg-blue-600 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Prioridad: {{ $tarea->priority }}</span>
                        @endif
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <x-primary-button>
                            Editar
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
