<?php

namespace App\Http\Livewire;

use App\Thing;
use Livewire\Component;

class Search extends Component
{
    public $thing;
    public $title;

    public function mount(Thing $thing)
    {
        $this->thing = $thing;
        $this->title = $thing->title;
    }

    public function updatedTitle($value)
    {
        $this->thing->update([
            'title' => $value,
        ]);
    }

    public function render()
    {
        return view('livewire.search');
    }
}
