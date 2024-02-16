<?php

namespace Database\Seeders;

use App\Models\PolutanRecord;
use App\Models\User;
use App\Models\Villages;
use Illuminate\Database\Seeder;

class RandomPolutanRecordSeeder extends Seeder
{
    public function run()
    {
        $village = Villages::first();
        foreach (range(1, 24) as $key) {
            PolutanRecord::create([
               'pm_two' => rand(0.5, 54.5),
               'village_id' => $village->id,
               'district_id' => $village->district_id,
               'user_id' => User::first()->id
            ]);
        }
    }
}
