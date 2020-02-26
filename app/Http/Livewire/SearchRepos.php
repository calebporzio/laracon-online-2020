<?php

namespace App\Http\Livewire;

use App\Repo;
use Livewire\Component;

class SearchRepos extends Component
{
    public $search = 'foo';

    protected $updatesQueryString = ['search'];

    public function mount($initialSearch = '')
    {
        $this->search = request('search', $initialSearch);
    }

    public function render()
    {
        return view('livewire.search-repos', [
            'repos' => Repo::search($this->search),
        ]);
    }
}
