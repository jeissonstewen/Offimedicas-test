<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'John',
            'lastname' => 'Doe',
            'birthdate' => '1997/04/28',
            'document_number' => '1111',
            'document_type' => 'CC',
        ]);

        User::create([
            'name' => 'Adriana',
            'lastname' => 'Perez',
            'birthdate' => '1955/05/04',
            'document_number' => '2222',
            'document_type' => 'CC',
        ]);

        User::create([
            'name' => 'Carlos',
            'lastname' => 'Diaz',
            'birthdate' => '2005/08/15',
            'document_number' => '3333',
            'document_type' => 'TI',
        ]);
    }
}
