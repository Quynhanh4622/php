<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('customers')->truncate();
        DB::table('customers')->insert([
            [
                'id' => 1,
                'name' => 'Quynh',
                'address' => 'hoang mai',
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 2,
                'name' => 'Quynh Anh',
                'address' => 'hoang liet',
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 3,
                'name' => 'Anh',
                'address' => 'ha noi',
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 4,
                'name' => 'Chinh',
                'address' => 'My Dinh',
                'created_at'=> Carbon::now()->addDays(1)
            ],[
                'id' => 5,
                'name' => 'Linh',
                'address' => 'ton that thuyet',
                'created_at'=> Carbon::now()->addDays(1)
            ]
            ]);
    }
}
