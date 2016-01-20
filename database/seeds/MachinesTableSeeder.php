<?php

use Illuminate\Database\Seeder;
use App\Device;

class MachinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('devices')->truncate();
        Device::insert([['uid' => '12345678', 'description' => 'MACHINE 1', 'status' => 1],
        	['uid' => '12121212', 'description' => 'MACHINE 2', 'status' => 2],
        	['uid' => '11111111', 'description' => 'MACHINE 3', 'status' => 3]]);
    }
}
