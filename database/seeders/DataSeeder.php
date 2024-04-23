<?php

namespace Database\Seeders;

use App\Models\Data;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Data::create([
            'data' => 'Data 1'
        ]);

        Data::create([
            'data' => 'Data 2'
        ]);

        Data::create([
            'data' => 'Data 3'
        ]);

        Data::create([
            'data' => 'Data 4'
        ]);

        Data::create([
            'data' => 'Data 5'
        ]);

        Data::create([
            'data' => 'Data 6'
        ]);

        Data::create([
            'data' => 'Data 7'
        ]);

        Data::create([
            'data' => 'Data 8'
        ]);

        Data::create([
            'data' => 'Data 9'
        ]);

        Data::create([
            'data' => 'Data 10'
        ]);
    }
}
