<?php

use Illuminate\Database\Seeder;

class ShopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->insert([

            [
                'name' => 'Marijina Radnjica',
            ],
            [
                'name' => 'Shopcina',
            ],
            [
                'name' => 'Dr.Techno',
            ],
            [
                'name' => 'Tehnomanija',
            ],
            [
                'name' => 'WinWin',
            ],
            [
                'name' => 'Gigatron',
            ]
        ]);
    }
}
