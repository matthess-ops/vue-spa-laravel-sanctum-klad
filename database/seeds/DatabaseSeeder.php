<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->create();
        // factory(App\User::class)->create(['name' => 'matthijn', 'email' => 'matthijn@gmail.com', 'password' => bcrypt('password')]);
        //  App\Crud::class->count(3)->create();
        $this->call(ClientsTableSeeder::class);

    
    
    }
}
