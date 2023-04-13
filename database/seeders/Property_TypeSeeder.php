<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Property_TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $property_types = [
            [
                'Name' => 'Appartment'
            ],
            [
                'Name' => 'House'
            ],
            [
                'Name' => 'Commercial Lot'
            ],
            [
                'Name' => 'Rental Space'
            ],
            [
                'Name' => 'Town House'
            ],
            [
                'Name' => 'Land '
            ],
            [
                'Name' => 'Warehouse'
            ]
        ];

        foreach($property_types as $key => $value){
            Type::create($value);
        }
    }
}
