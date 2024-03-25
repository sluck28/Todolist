<?php

namespace App\Livewire;

use App\Models\Tarea;
use Livewire\Attributes\Title;
use Livewire\Component;

class CrearTarea extends Component
{

    public $title, $priority, $due_date, $description;




    public function crearTarea()
    {


        $this->validate(

            [
                'title' => 'required|max:100',
                'priority' => 'required',
                'due_date' => 'required',
                'description' => 'required|max:10000'
            ]
        );


        Tarea::create([
            'user_id'=>auth()->user()->id,
            'title' => $this->title,
            'priority' => $this->priority,
            'due_date' => $this->due_date,
            'description' => $this->description
        ]);

        

        /**creamos un mensaje  */
        session()->flash('tarea creada correctamente');

        return redirect()->route('tareas.index');
    }

    /**Aqui mando a llamar mi vista de livewire */
    public function render()
    {

        $prioridades = ['alta', 'media', 'baja'];

        return view(
            'livewire.crear-tarea',
            [
                'prioridades' => $prioridades
            ]

        );
    }
}
