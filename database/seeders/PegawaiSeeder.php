<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 50; $i++) {
            DB::table('pegawai')->insert([
                'pegawai_nama' => $faker->name,
                'pegawai_jabatan' => $faker->jobTitle,
                'pegawai_umur' => $faker->numberBetween(20, 55),
                'pegawai_alamat' => $faker->address
            ]);
        }
    }
}
