<?php

use App\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(Contact::class, 50)->create();
    }
}
