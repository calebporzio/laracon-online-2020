<?php

namespace Tests;

use App\Console\Kernel;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Schema;

abstract class TestCase extends BaseTestCase
{
    use DatabaseTransactions;

    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        // Refresh sushi.
        if (class_exists(\App\Repo::class)) {
            $connection = \App\Repo::sushiConnectionName();
            \DB::setDefaultConnection($connection);
            Schema::refreshDatabaseFile();
            (new \App\Repo)->migrate();
            (new \App\Repo);
        }

        return $app;
    }
}
