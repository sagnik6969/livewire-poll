<?php

namespace App\Http\Livewire;

use App\Models\Poll;
use Livewire\Component;

class CreatePoll extends Component
{
    public $title;
    public array $options = [];
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

    public function createPoll()
    {
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

    }

    // public function mount(){
    // similar to mount function of vue.js
    // used to  initialize variables.
    // }
}
