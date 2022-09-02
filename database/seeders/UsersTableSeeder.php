<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Factory;
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
        \App\Models\User::factory(10)->create();
        
        /*
        User::create([
            'name' => 'Samuel Costa',
            'email' => 'dev.scosta@gmail.com',
            'password' => bcrypt('Snoop_Dog..123'),
        ]);
        */
    }
}
