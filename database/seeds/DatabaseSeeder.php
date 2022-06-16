<?php

use Database\seeds\v100\AttachmentTypeSeeder;
use Database\seeds\v100\LeaveTypesTableSeeder;
use Database\seeds\v100\TransportMeansSeeder;
use Database\seeds\v100\WorkingToolsTableSeeder;
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

        DB::commit();
    }
}
