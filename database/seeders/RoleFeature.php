<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role_feature;

class RoleFeature extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role_feature::truncate();
        return $this->seed();
    }
    public function seed(){
        Role_feature::create([
            'id' => 1,
            'role_id' => 1,
            'feature_id' => 1,
        ]);
        Role_feature::create([
            'id' => 2,
            'role_id' => 1,
            'feature_id' => 2,
        ]);
    }
}
