<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('roles')->truncate();

        DB::table('roles')->insert([
            [
                'name' => 'admin',
                'display_name' => 'Admin',
                'description' => 'This is the awesome admin',
            ],
            [
                'name' => 'super_admin',
                'display_name' => 'Super Admin',
                'description' => 'This is the awesome super admin',
            ],
            [
                'name' => 'general_user',
                'display_name' => 'General User',
                'description' => 'This is cool general user',
            ],

        ]);
    }
}
