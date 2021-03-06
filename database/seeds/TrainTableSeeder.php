<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {
            $trainData = [
                'Azienda'=>$faker->company(),
                'Stazione_di_partenza'=>$faker->city(),
                'Stazione_di_arrivo'=>$faker->city(),
                'Giorno_di_partenza'=>$faker->dateTimeBetween('-1 week', '+4 week'),
                'Giorno_di_arrivo'=>$faker->dateTimeBetween('-1 week', '+4 week'),
                'Orario_di_partenza'=>$faker->time(),
                'Orario_di_arrivo'=>$faker->time(),
                'Codice_treno'=>$faker->randomDigit(5),
                'Numero_carrozza'=>$faker->randomDigit(),
                'Ritardo'=>$faker->numberBetween(0, 1),
                'Annullato'=>$faker->numberBetween(0, 1),
            ];

            $train = new Train();
            $train->fill($trainData);
            $train->save();
        }
    }
}
