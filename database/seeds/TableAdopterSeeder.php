<?php

use Illuminate\Database\Seeder;
use App\Adopter;

class TableAdopterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adopter::create([
            'name' => 'bagus',
            'l_name' => 'manuaba',
            'email' => 'bagus@email.com',
            'Phone_number' => '081212121212',
            'password' => Hash::make('finalproject'), 
        ]);
        //
    }
}
