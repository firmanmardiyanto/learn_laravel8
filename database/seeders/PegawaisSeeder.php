<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // membuat data dummy sebanyak 10 record
        for ($x = 1; $x <= 100; $x++) {

            // insert data dummy pegawai dengan faker
            DB::table('pegawais')->insert([
                'nama' => $faker->name,
                'alamat' => $faker->address,
            ]);
        }
    }
}
