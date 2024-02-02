<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class userController extends Controller
{
    public function generateUsers()
    {
        $faker = Faker::create();

        
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'), 
            ]);
        }

        return response()->json(['message' => 'Utilisateurs générés avec succès']);
    }
}
