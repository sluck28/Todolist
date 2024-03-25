<?php

namespace App\Livewire;

use Livewire\Component;

class MostrarAlerta extends Component
{
    /**Llamamos nuestra variable del mensaje de error */
    public $message;

    public function render()
    {
        return view('livewire.mostrar-alerta');
    }
}
