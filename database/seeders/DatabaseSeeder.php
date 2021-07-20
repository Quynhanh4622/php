<?php

namespace Database\Seeders;

use App\Http\Controllers\CustomerController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this ->call([
           ProductSeeder::class,
           CustomerSeeder::class,
           OrderSeeder::class,
           OrderDetailSeeder::class,
            EventSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
