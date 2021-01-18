<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Hello extends Component
{
    public $nome = "Executing ...";
    public $opcao = false;
    public $select = "0 %";
    public $multiplo = ["0"];

    public function render()
    {

        return view('livewire.hello');
    }
}
