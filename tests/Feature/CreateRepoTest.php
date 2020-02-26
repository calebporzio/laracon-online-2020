<?php

namespace Tests\Feature;

use App\Repo;
use Livewire;

class CreateRepoTest extends \Tests\TestCase
{
    /** @test */
    function can_create_repo()
    {
        Livewire::test('create-repo')
            ->set('name', 'foo')
            ->call('create');

        $this->assertTrue(Repo::whereName('foo')->exists());
    }

    /** @test */
    function name_is_required()
    {
        Livewire::test('create-repo')
            ->set('name', '')
            ->call('create')
            ->assertHasErrors('name');
    }

    /** @test */
    function name_is_unique_as_user_types()
    {
        Repo::create(['name' => 'foo']);

        Livewire::test('create-repo')
            ->set('name', 'foo')
            ->assertHasErrors(['name' => 'unique']);
    }
}
