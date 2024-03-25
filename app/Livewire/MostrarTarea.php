<?php

namespace App\Livewire;

use App\Models\Tarea;
use Livewire\Component;

class MostrarTarea extends Component
{
    public function render()
    {
        /**Mostramos las tareas creadas */
        $tareas = Tarea::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-tarea', [
            'tareas' => $tareas
        ]);

    }
}
