<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FillRedisImitation extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('redis_imitation')->insert([
            'key' => 'autogenerated_path',
            'value' => 0
        ]);
    }
}