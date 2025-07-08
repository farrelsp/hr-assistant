<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
// use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userEmployee = \App\Models\User::create([
            'name' => 'arbiparameswara',
            'email' => 'arbi@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
            'remember_token' => Str::random(60)
        ]);

        $employee = \App\Models\Employee::create([
            'first_name' => 'Made Arbi',
            'last_name' => 'Parameswara',
            'gender' => 'M',
            'address' => 'Bali',
            'date_of_birth' => '1999-05-08',
            'no_hp' => '080909808070',
            'position' => 'Human Resources'
        ]);

        $userEmployee->employee()->save($employee);

        \App\Models\User::factory()->create([
            'name' => 'usertest',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'role' => 'user',
            'remember_token' => Str::random(60)
        ]);
    }
}
