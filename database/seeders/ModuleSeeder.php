<?php

namespace Database\Seeders;

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Module::create([
            'type' => 'P',
            'code' => '1',
            'available' => true
        ]);

        Module::create([
            'type' => 'P',
            'code' => '2',
            'available' => true
        ]);

        Module::create([
            'type' => 'G',
            'code' => '3',
            'available' => true
        ]);

        Module::create([
            'type' => 'G',
            'code' => '4',
            'available' => true
        ]);

        Module::create([
            'type' => 'G',
            'code' => '5',
            'available' => true
        ]);

        Module::create([
            'type' => 'G',
            'code' => '6',
            'available' => true
        ]);

     

    }
}
