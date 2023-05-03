<?php

namespace Database\Seeders;

use App\Models\clothes;

use Faker\Generator as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ClothesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {
            $clothes = new Clothes();
            $clothes->name = $faker->name();
            $clothes->slug = Str::of($clothes->name)->slug('-');
            $clothes->price = $faker->randomFloat(2, 20, 300);
            $clothes->save();
        }
    }
}