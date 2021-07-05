<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Use Role::create so that Laravel uses Eloquent
         */
        User::create([
            'name' => 'USER',
            'role_id' => Role::IS_USER,
            'email' => 'user@ivog.nl',
            'password' => 'user'
        ]);

        User::create([
            'name' => 'ADMIN',
            'role_id' => Role::IS_ADMIN,
            'email' => 'admin@ivog.nl',
            'password' => 'admin'
        ]);

        User::create([
            'name' => 'HEADADMIN',
            'role_id' => Role::IS_HEAD_ADMIN,
            'email' => 'headadmin@ivog.nl',
            'password' => 'headadmin'
        ]);
    }
}
