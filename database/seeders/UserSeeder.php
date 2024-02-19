<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        \DB::table('users')->insert(array (
            0 =>
            array (
                'user_id' => 1,
                'first_name' => 'Vivien',
                'last_name' => 'Caampued',
                'email' => 'vc@gmail.com',
                'password' => '$2y$12$UX0uPiqofWdGITEx3dHBlOVL7v0lNqPJibJdQZIekkh.WTzwMRXFK',
                'role' => 'user',
                'student_id' => 1,
            ),
            1 =>
            array (
                'user_id' => 1602,
                'first_name' => 'Angie',
                'last_name' => 'Libang',
                'email' => 'al@admin.com',
                'password' => '$2y$12$jSmB/6VOItwdAEzfqfI3bOz7VnyAVLWev/6iethO2is0CMm8dwBWm',
                'role' => 'admin',
                'student_id' => 0,
            ),

        ));


    }
}
