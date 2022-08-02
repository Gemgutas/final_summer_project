<?php

namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MyHotelBar;

class MyHotelBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bars = [
            [
                'bar_name' => 'Atomic G Liquors',
                'type' => 'Whiskey Bar',
                'address'=>'New York City'
            ],
            [
                'bar_name' => 'Hi Dive Bar',
                'type' => 'Vodka Bar',
                'address'=>'New York City'
            ],
            [
                'bar_name' => 'Death & Co',
                'type' => 'Cocktail Bar',
                'address'=>'New York City'
            ],
            [
                'bar_name' => 'Bar Of The Gods',
                'type' => 'Shisha Bar',
                'address'=>'New York City'
            ]

        ];

        foreach($bars as $b){
             MyHotelBar::create($b);
        }
    }
}
