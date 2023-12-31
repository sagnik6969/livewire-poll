<?php

namespace App\Http\Livewire;

use App\Models\Poll;
use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public array $options = [];

    protected $rules = [
        'title' => 'required|min:6',
        'options' => 'required|min:1|array',
        'options.*' => 'required'
        // For validating individual elements
    ];

    protected $messages = [
        'options.*' => 'The option cant be empty',
        // for custom error messages
    ];

    public function render()
    {
        return view('livewire.create-poll');
    }

    public function addOption()
    {
        $this->options[] = "";
        // / $this->info('fuck');
    }
    public function removeOption($index)
    {

        unset($this->options[$index]);
        // to erase the value of a particular index
        $this->options = array_values($this->options);
        // to resetting the indexes.
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        // for live validation as we type in the input field
    }

    public function createPoll()
    {
        $this->validate();
        $poll = Poll::create([
            'name' => $this->title
        ])->options()->createMany(
                collect($this->options)->map(fn($option) => ['name' => $option])->all()
                // all is to convert collection to array.
            );

        // foreach ($this->options as $option) {

        //     $poll->options()->create([
        //         'name' => $option
        //     ]);
        // }

        $this->reset(['title', 'options']);
        // for resting the form after the input is submitted

        $this->emit('pollCreated');

    }

    // public function mount(){
    // similar to mount function of vue.js
    // used to  initialize variables.
    // }
}
