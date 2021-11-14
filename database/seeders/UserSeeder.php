<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id'=> 1,
            'name'=>'superadmin',
            'email'=>'super@admin.com',
            'password' => bcrypt('password'),
            'role'=>'admin',
            'email_verified_at' => now()

        ]);
    }
}
