<?php

namespace App\Livewire;

use Livewire\Component;

class NestedComp extends Component
{
    public $nestedVar = "someValue";
    public function render()
    {
        return view('livewire.nested-comp');
    }
}
