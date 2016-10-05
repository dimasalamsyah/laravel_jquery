<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //insert ke table barang
        // $faker = Faker\Factory::create();
        // $limit = 50;
        // for ($i = 0; $i < $limit; $i++) {
        //     DB::table('barangs')->insert([ //,
        //         'name' => $faker->name,
        //         'harga' => $faker->numberBetween($min = 1000, $max = 9000)
        //     ]);
        // }
    }
}

class TableBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert ke table barang
        $faker = Faker\Factory::create();
        $limit = 50;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('barangs')->insert([ //,
                'name' => $faker->name,
                'harga' => $faker->numberBetween($min = 1000, $max = 9000)
            ]);
        }
    }
}
