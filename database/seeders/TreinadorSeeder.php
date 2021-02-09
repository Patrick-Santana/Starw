<?php

namespace Database\Seeders;

use App\models\Treinador;
use App\Models\User;
use Illuminate\Database\Seeder;

class TreinadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::All();

        foreach($users as $user)    
        {
            Treinador::factory(1)->create([
                'user_id' => $user->id
            ]);
        }
    }
}
