<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Pokemon;
use App\Models\Treinador;
use Illuminate\Database\Seeder;


class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(User::all() as $user)
        {
            Pokemon::factory(10)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
