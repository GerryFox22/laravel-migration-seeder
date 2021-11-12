<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i=10; $i++){
            $newTravel = new Travel();
            $newTravel->title = $faker->sentence();
            $newTravel->image = $faker->imageUrl(360, 360);
            $newTravel->price = $faker->randomDigitNotNull();
            $newTravel->destination = $faker->word() ;
            $newTravel->how_many_people = $faker->randomDigitNotNull() ;
            $newTravel->date = $faker->date() ;
            $newTravel->description = $faker->paragraph(2);

        }
    }
}
