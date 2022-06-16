<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class CodesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        $this->disableForeignKeys("codes");
        $this->delete('codes');

        \DB::table('codes')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Gender',
                    'lang' => 'gender',
                    'is_system_defined' => 1,
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Prefix',
                    'lang' => 'prefix',
                    'is_system_defined' => 1,
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Address Type',
                    'lang' => 'address_type',
                    'is_system_defined' => 1,
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Skill Level',
                    'lang' => 'skill_level',
                    'is_system_defined' => 1,
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'Education Level',
                    'lang' => 'education_level',
                    'is_system_defined' => 1,
                )
        ));
        $this->enableForeignKeys("codes");

    }
}
