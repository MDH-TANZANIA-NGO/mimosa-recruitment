<?php

use Illuminate\Database\Seeder;
use Database\TruncateTable;
use Database\DisableForeignKeys;

class CodeValuesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        $this->disableForeignKeys("code_values");
        $this->delete('code_values');

        \DB::table('code_values')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'code_id' => 1,
                    'name' => 'Male',
                    'lang' => NULL,
                    'description' => '',
                    'reference' => 'ULLGI',
                    'sort' => 1,
                    'isactive' => 1,
                ),
            1 =>
                array (
                    'id' => 2,
                    'code_id' => 1,
                    'name' => 'Female',
                    'lang' => NULL,
                    'description' => '',
                    'reference' => 'ULLGO',
                    'sort' => 2,
                    'isactive' => 1,
                ),
            2 =>
                array (
                    'id' => 3,
                    'code_id' => 2,
                    'name' => 'Dr.',
                    'lang' => NULL,
                    'description' => '',
                    'reference' => 'ULFLI',
                    'sort' => 3,
                    'isactive' => 1,
                ),
            3 =>
                array (
                    'id' => 4,
                    'code_id' => 2,
                    'name' => 'Miss',
                    'lang' => NULL,
                    'description' => '',
                    'reference' => 'ULPRS',
                    'sort' => 4,
                    'isactive' => 1,
                ),
            4 =>
                array (
                    'id' => 5,
                    'code_id' => 2,
                    'name' => 'Mr',
                    'lang' => NULL,
                    'description' => '',
                    'reference' => 'ULULC',
                    'sort' => 5,
                    'isactive' => 1,
                ),
            5 =>
                array (
                    'id' => 6,
                    'code_id' => 2,
                    'name' => 'Mrs',
                    'lang' => "prefm",
                    'description' => '',
                    'reference' => 'pref',
                    'sort' => 2,
                    'isactive' => 1,
                ),
            6 =>
                array (
                    'id' => 7,
                    'code_id' => 2,
                    'name' => 'Ms',
                    'lang' => "MKE",
                    'description' => '',
                    'reference' => 'GFIMALE',
                    'sort' => 1,
                    'isactive' => 1,
                ),
            7 =>
                array (
                    'id' => 8,
                    'code_id' => 2,
                    'name' => 'Professor',
                    'lang' => NULL,
                    'description' => '',
                    'reference' => 'MSG',
                    'sort' => 1,
                    'isactive' => 1,
                ),
            8 =>
                array (
                    'id' => 9,
                    'code_id' => 3,
                    'name' => 'Current Address',
                    'lang' => NULL,
                    'description' => 'This is a current Address',
                    'reference' => 'CA',
                    'sort' => 0,
                    'isactive' => 1,
                ),
            9 =>
                array (
                    'id' => 10,
                    'code_id' => 3,
                    'name' => 'Permanent Address',
                    'lang' => NULL,
                    'description' => 'This is a permanent Address',
                    'reference' => 'PA',
                    'sort' => 0,
                    'isactive' => 1,
                ),
            10 =>
                array (
                    'id' => 11,
                    'code_id' => 4,
                    'name' => 'Very Good',
                    'lang' => NULL,
                    'description' => '',
                    'reference' => 'MSD',
                    'sort' => 1,
                    'isactive' => 1,
                ),
            11 =>
                array (
                    'id' => 12,
                    'code_id' => 4,
                    'name' => 'Good',
                    'lang' => NULL,
                    'description' => '',
                    'reference' => 'MWI',
                    'sort' => 1,
                    'isactive' => 1,
                ),
            12 =>
                array (
                    'id' => 13,
                    'code_id' => 4,
                    'name' => 'Intermediate',
                    'lang' => NULL,
                    'description' => 'This should be used if you have an intermediate level',
                    'reference' => 'PTCT',
                    'sort' => 1,
                    'isactive' => 1,
                ),
            13 =>
                array (
                    'id' => 14,
                    'code_id' => 4,
                    'name' => 'Poor',
                    'lang' => NULL,
                    'description' => 'If you are getting started with this skill choose this',
                    'reference' => 'PTS',
                    'sort' => 0,
                    'isactive' => 1,
                ),
            14 =>
                array (
                    'id' => 15,
                    'code_id' => 5,
                    'name' => 'Primary',
                    'lang' => NULL,
                    'description' => 'Primary Education',
                    'reference' => 'PE',
                    'sort' => 0,
                    'isactive' => 1,
                ),
            15 =>
                array (
                    'id' => 16,
                    'code_id' => 5,
                    'name' => 'Ordinary Level',
                    'lang' => NULL,
                    'description' => 'Secondary School Education',
                    'reference' => 'OL',
                    'sort' => 0,
                    'isactive' => 1,
                ),
            16 =>
                array (
                    'id' => 17,
                    'code_id' => 5,
                    'name' => 'Advanced Level',
                    'lang' => NULL,
                    'description' => 'Advanced Secondary School Education',
                    'reference' => 'Pro',
                    'sort' => 0,
                    'isactive' => 1,
                ),
            17 =>
                array (
                    'id' => 18,
                    'code_id' => 5,
                    'name' => 'Diploma',
                    'lang' => NULL,
                    'description' => 'Certificate in Diploma',
                    'reference' => 'Int',
                    'sort' => 0,
                    'isactive' => 1,
                ),
            18 =>
                array (
                    'id' => 19,
                    'code_id' => 5,
                    'name' => 'Advanced Diploma',
                    'lang' => NULL,
                    'description' => 'Certificate in Advanced Diploma',
                    'reference' => 'Ext',
                    'sort' => 0,
                    'isactive' => 1,
                ),
            19 =>
                array (
                    'id' => 20,
                    'code_id' => 5,
                    'name' => 'Postgraduate Diploma',
                    'lang' => NULL,
                    'description' => 'Certificate in Postgraduate diploma',
                    'reference' => 'Fix',
                    'sort' => 0,
                    'isactive' => 1,
                ),
            20 =>
                array (
                    'id' => 21,
                    'code_id' => 5,
                    'name' => 'Bachelors Degree',
                    'lang' => NULL,
                    'description' => 'Bachelors Degree',
                    'reference' => 'Con',
                    'sort' => 0,
                    'isactive' => 1,
                ),
            21 =>
                array (
                    'id' => 22,
                    'code_id' => 5,
                    'name' => 'Masters Degree',
                    'lang' => NULL,
                    'description' => 'Masters Degree',
                    'reference' => 'Add',
                    'sort' => 0,
                    'isactive' => 1,
                ),
            22 =>
                array (
                    'id' => 23,
                    'code_id' => 5,
                    'name' => 'PhD',
                    'lang' => NULL,
                    'description' => 'PhD',
                    'reference' => 'New',
                    'sort' => 0,
                    'isactive' => 1,
                ),
        ));
        $this->enableForeignKeys("code_values");

    }
}
