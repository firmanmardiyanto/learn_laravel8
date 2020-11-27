<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TeleponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 100; $i++) {
            DB::table('telepons')->insert([
                'nomor_telepon' => $faker->randomNumber(NULL, false),
                'pengguna_id' => $i
            ]);
        }
    }
}
