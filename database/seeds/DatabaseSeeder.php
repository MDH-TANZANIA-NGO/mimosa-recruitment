<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        //$this->call(UsersTableSeeder::class);
        $this->call(CodesTableSeeder::class);
        $this->call(CodeValuesTableSeeder::class);
        $this->call(CountryTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);

        DB::commit();
    }
}
