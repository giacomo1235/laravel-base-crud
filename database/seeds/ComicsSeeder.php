<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {

        $arrComics = [];

        foreach ($arrComics as $comicData) {
            Comic::create($comicData);
        }

        for ($i = 0; $i < 300; $i++) {
            Comic::create([
                'title'             => $faker->sentence(15),
                'description'       => $faker->text(),
                'thumb'             => $faker->imageUrl(640, 480, 'houses', true),
                'price'             => $faker->int(),
                'series'            => $faker->text(),
                'sale_date'         => $faker->date(),
                'type'              => $faker->sentence(10)
            ]);
        };
    }
    
}
