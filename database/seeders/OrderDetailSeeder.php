<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('order_details')->truncate();
        DB::table('order_details')->insert([
            [
                'orderId' => 9,
                'productId' => 9,
                'quantity' => 1,
                'amount' => 11000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 2,
                'amount' => 20000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 3,
                'amount' => 21000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 4,
                'amount' => 25000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 5,
                'amount' => 29000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 6,
                'amount' => 30000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 7,
                'amount' => 90000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 8,
                'amount' => 40000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 9,
                'amount' => 20000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 10,
                'amount' => 70000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 9,
                'productId' => 9,
                'quantity' => 11,
                'amount' => 140000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 2,
                'amount' => 270000,
                'created_at' => Carbon::now()->addDays(1)
             ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 3,
                'amount' => 290000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 4,
                'amount' => 60000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 5,
                'amount' => 230000,
                'created_at' => Carbon::now()->addDays(1)
             ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 6,
                'amount' => 320000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 7,
                'amount' => 820000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 8,
                'amount' => 720000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 9,
                'amount' => 420000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 10,
                'amount' => 120000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 10,
                'amount' => 220000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 10,
                'amount' => 520000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 10,
                'amount' => 920000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 10,
                'amount' => 410000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 10,
                'amount' => 710000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 10,
                'amount' => 280000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'amount' => 290000,
                'quantity' => 10,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 10,
                'amount' => 7000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 10,
                'amount' => 274000,
                'created_at' => Carbon::now()->addDays(1)
            ],[
                'orderId' => 8,
                'productId' => 7,
                'quantity' => 10,
                'amount' => 28000,
                'created_at' => Carbon::now()->addDays(1)
            ]
            ]);
    }
}
