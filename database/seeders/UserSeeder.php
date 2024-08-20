<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $usersData = [
            [
                "name" => "Mattia",
                "email" => "mattia@hotmail.it",
                "password" => "1a2s3d4f5g"
            ]
        ];

        foreach ($usersData as $userData) {
            $user = new User();
            $user->name = $userData["name"];
            $user->email = $userData["email"];
            $user->password = bcrypt($userData["password"]);
            $user->save();
        }
    }
}
