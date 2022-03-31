<?php

use App\House;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $house = new House();

        $house->reference_number = '123456';
        $house->name = 'Villetta luminosa 100mq';
        $house->description = null;
        $house->amount = 200000;
        $house->sm = 100;
        $house->rooms = 5;
        $house->address = 'Via della Repubblica 1';
        $house->city = 'Firenze';
        $house->province = 'FI';
        $house->zip = '51000';
        $house->energy_rating = 'A';

        $house->save();

    }

}
