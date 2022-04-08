<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::create([
            'name' => 'Dandi Juliandi',
            'email' => 'dandi@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $user->profile()->create([
            'avatar' => 'default.jpg',
            'role_id' => 1
        ]);
    }
}
