<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => 'event A',
            'slug' => 'slug A',
            'startAt' => Carbon::create('2022', '05', '01'),
            'endAt' => Carbon::create('2022', '06', '01'),
            'createdAt' => Carbon::now(),
            'updatedAt' => Carbon::now(),
        ]);

        DB::table('events')->insert([
            'name' => 'event B',
            'slug' => 'slug B',
            'startAt' => Carbon::create('2022', '05', '01'),
            'endAt' => Carbon::create('2022', '06', '01'),
            'createdAt' => Carbon::now(),
            'updatedAt' => Carbon::now(),
        ]);

        DB::table('events')->insert([
            'name' => 'event C',
            'slug' => 'slug C',
            'startAt' => Carbon::create('2022', '05', '01'),
            'endAt' => Carbon::create('2022', '06', '01'),
            'createdAt' => Carbon::now(),
            'updatedAt' => Carbon::now(),
        ]);

        DB::table('events')->insert([
            'name' => 'event D',
            'slug' => 'slug D',
            'startAt' => Carbon::create('2022', '05', '01'),
            'endAt' => Carbon::create('2022', '06', '01'),
            'createdAt' => Carbon::now(),
            'updatedAt' => Carbon::now(),
        ]);

        DB::table('events')->insert([
            'name' => 'event E',
            'slug' => 'slug E',
            'startAt' => Carbon::create('2022', '05', '01'),
            'endAt' => Carbon::create('2022', '06', '01'),
            'createdAt' => Carbon::now(),
            'updatedAt' => Carbon::now(),
        ]);
    }
}
