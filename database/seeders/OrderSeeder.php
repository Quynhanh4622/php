<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('orders')->truncate();
        DB::table('orders')->insert([
            [
                'id' => 1,
                'customerId' => 4,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'id' => 2,
                'customerId' => 3,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'id' => 3,
                'customerId' => 2,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'id' => 4,
                'customerId' => 4,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'id' => 5,
                'customerId' => 1,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'id' => 6,
                'customerId' => 3,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'id' => 7,
                'customerId' => 4,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'id' => 8,
                'customerId' => 2,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'id' => 9,
                'customerId' => 3,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'id' => 10,
                'customerId' => 4,
                'created_at' => Carbon::now()->addDays(1)
            ]
            ]);
    }
}
