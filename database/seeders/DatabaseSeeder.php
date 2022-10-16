<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon; //For date

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
        // \App\Models\User::factory(10)->create();
        DB::table('inventories')->insert([
            'product' => 'A',
            'balance' => 10,
            'created_at' => Carbon::now(),
        ]);

        DB::table('inventories')->insert([
            'product' => 'B',
            'balance' => 10,
            'created_at' => Carbon::now(),
        ]);

        DB::table('inventories')->insert([
            'product' => 'C',
            'balance' => 10,
            'created_at' => Carbon::now(),
        ]);

        DB::table('inventories')->insert([
            'product' => 'D',
            'balance' => 10,
            'created_at' => Carbon::now(),
        ]);

        DB::table('inventories')->insert([
            'product' => 'E',
            'balance' => 10,
            'created_at' => Carbon::now(),
        ]);
    }
}
