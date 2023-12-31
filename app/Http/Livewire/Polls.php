<?php

namespace App\Http\Livewire;

use App\Models\Option;
use App\Models\Poll;
use Livewire\Component;

class Polls extends Component
{
    // to listen for events

    protected $listeners = [
        'pollCreated' => 'render'
    ];
    public function render()
    {
        $polls = Poll::with('options.votes')->latest()->get();
        // fetch both the options and votes
        return view('livewire.polls', [
            'polls' => $polls
        ]);
    }

    public function vote($optionId)
    {
        Option::findOrFail($optionId)->votes()->create();
        $this->render();
    }
}
