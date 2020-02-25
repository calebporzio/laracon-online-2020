<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Repo extends Model
{
    use Sushi;

    protected $guarded = [];

    protected $rows = [
        ['name' => 'livewire'],
        ['name' => 'alpine'],
        ['name' => 'sushi'],
        ['name' => 'laravel'],
        ['name' => 'blade'],
        ['name' => 'inertial'],
        ['name' => 'tailwind'],
    ];
}
