<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('products')->truncate();
        DB::table('products')->insert([
           [
               'id' => 1,
               'name' => 'o to',
               'price' => 2000,
               'created_at'=> Carbon::now()->addDays(1)
           ],[
                'id' => 2,
                'name' => 'bup be',
                'price' => 3000,
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 3,
                'name' => 'tau hoa',
                'price' => 4000,
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 4,
                'name' => 'nau an',
                'price' => 2000,
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 5,
                'name' => 'bac si',
                'price' => 5000,
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 6,
                'name' => 'ban sung',
                'price' => 2000,
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 7,
                'name' => 'hoa si',
                'price' => 4000,
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 8,
                'name' => 'da bong',
                'price' => 2000,
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 9,
                'name' => 'abc',
                'price' => 400,
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 10,
                'name' => 'rubik',
                'price' => 9000,
                'created_at'=> Carbon::now()->addDays(1)
            ]
        ]);
        //
    }
}
