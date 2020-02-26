<?php

namespace App\Http\Livewire;

use App\Repo;
use Livewire\Component;

class CreateRepo extends Component
{
    public $name = '';

    public function updatedName()
    {
        $this->validate(['name' => 'unique:repos']);
    }

    public function create()
    {
        Repo::create($this->validate(['name' => 'required|unique:repos']));

        $this->reset('name');

        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        return view('livewire.create-repo');
    }
}
