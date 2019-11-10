<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'type' => 1, //admin user,
            'access' => 1, //user can login,
            'send_emails' => 1, //user will receive emails
            'first_name' => 'Jon',
            'last_name' => 'Smith',
            'email' => 'jonsmith@test.com',
            'password' => bcrypt('123456'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
