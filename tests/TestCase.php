<?php

namespace Tests;

use App\Console\Kernel;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Schema;

abstract class TestCase extends BaseTestCase
{
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        // Refresh sushi.
        Schema::refreshDatabaseFile();
        \App\Repo::setSqliteConnection(__DIR__.'/../database/database.sqlite');
        (new \App\Repo)->migrate();

        return $app;
    }
}
