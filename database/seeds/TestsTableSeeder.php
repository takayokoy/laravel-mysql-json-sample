<?php

use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tests = array(
            array ('json_data' => '{ "id":"1", "first_name":"Fname1", "last_name":"Lname1" }'),
            array ('json_data' => '{ "id":"2", "first_name":"Fname2", "last_name":"Lname2" }'),
            array ('json_data' => '{ "id":"3", "first_name":"Fname3", "last_name":"Lname3" }'),
            array ('json_data' => '{ "id":"4", "first_name":"Fname4", "last_name":"Lname4" }'),
            array ('json_data' => '{ "id":"5", "first_name":"Fname5", "last_name":"Lname5" }'),
            array ('json_data' => '{ "id":"6", "first_name":"Fname6", "last_name":"Lname6" }'),
            array ('json_data' => '{ "id":"7", "first_name":"Fname7", "last_name":"Lname7" }'),
            array ('json_data' => '{ "id":"8", "first_name":"Fname8", "last_name":"Lname8" }'),
            array ('json_data' => '{ "id":"9", "first_name":"Fname9", "last_name":"Lname9" }'),
            array ('json_data' => '{ "id":"10", "first_name":"Fname10", "last_name":"Lname10" }'),
        );

        DB::table('tests')->insert($tests);
    }
}
