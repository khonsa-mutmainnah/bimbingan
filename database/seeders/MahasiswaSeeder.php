<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class MahasiswaSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for($i = 1; $i <= 5; $i++){
            DB::table('mahasiswas')->insert([
                'nama' => $faker->name,
                'nim' => $faker->randomNumber(6, true),
                'tgl_lahir' => $faker->dateTime,
                'alamat' => $faker->address,
                'tahun_masuk' => $faker->year,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
        
    ]);
}
    }
}