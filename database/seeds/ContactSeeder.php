<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'parameter' => 'phone',
                'value' => '',
                'icon' => '',
                'status' => 1,
                'order' => 1
            ],
            [
                'parameter' => 'email',
                'value' => '',
                'icon' => '',
                'status' => 1,
                'order' => 2
            ],
            [
                'parameter' => 'address',
                'value' => '',
                'icon' => '',
                'status' => 1,
                'order' => 3
            ],
            [
                'parameter' => 'longitude',
                'value' => '',
                'icon' => '',
                'status' => 0,
                'order' => null
            ],
            [
                'parameter' => 'latitude',
                'value' => '',
                'icon' => '',
                'status' => 0,
                'order' => null
            ],

        ]);
    }
}
