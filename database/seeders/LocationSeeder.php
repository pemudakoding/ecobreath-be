<?php

namespace Database\Seeders;

use App\Models\District;
use App\Models\Villages;
use Arr;
use Http;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $baseUrl = Http::baseUrl(url: 'https://www.emsifa.com/api-wilayah-indonesia/api');

        $districts = $baseUrl->get(url: 'districts/7271.json')->json();
        $districts = Collection::wrap(value: $districts)->map(fn (array $district) => [
            'id' => $district['id'],
            'name' => $district['name'],
        ])
        ->toArray();

        foreach ($districts as $district) {
            $villages = $baseUrl->get(url: "villages/{$district['id']}.json")->json();

            Villages::query()->insert(values: $villages);
        }

        District::query()->insert(values: $districts);
    }
}
