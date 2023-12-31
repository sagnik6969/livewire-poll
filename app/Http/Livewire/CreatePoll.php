<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public array $options = ['Good'];
    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = fake()->word();
        // / $this->info('fuck');
    }
    public function removeOption($index)
    {
        unset($this->options[$index]);
        // to erase the value of a particular index
        $this->options = array_values($this->options);
        // to resetting the indexes.
    }

    // public function mount(){
    // similar to mount function of vue.js
    // used to  initialize variables.
    // }
}
