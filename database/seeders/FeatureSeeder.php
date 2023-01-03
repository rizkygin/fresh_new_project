<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::truncate();
        return Feature::create([
            'id'=> 1,
            'link' => '/developer',
            'name' => 'Developer'
        ]);
    }
}
