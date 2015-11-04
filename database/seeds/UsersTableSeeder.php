<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class, 1)->create([
            'name'     => 'Administrator',
            'email'    => 'admin@example.com',
            'password' => bcrypt('admin')
        ]);

        factory(App\Models\User::class, 10)->create();
    }
}
