<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory([
            'name'     => 'Admin',
            'email'    => 'admin@admin.ru',
            'password' => bcrypt('secret'),
            'is_admin' => true,
        ])->create();
    }
}
