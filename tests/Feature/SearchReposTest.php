<?php

namespace Tests\Feature;

use App\Repo;
use Livewire;

class SearchReposTest extends \Tests\TestCase
{
    /** @test */
    function can_search_repos()
    {
        Repo::create(['name' => 'foo']);
        Repo::create(['name' => 'bar']);

        Livewire::test('search-repos')
            ->assertDontSee('foo')
            ->assertDontSee('bar')
            ->set('search', 'fo')
            ->assertSee('foo')
            ->assertDontSee('bar');
    }
}
