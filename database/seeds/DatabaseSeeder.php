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
        factory(App\User::class)->create(['is_admin'=>true,'name' => 'matthijn', 'email' => 'matthijn@gmail.com', 'password' => bcrypt('password')]);
        factory(App\User::class)->create(['is_admin'=>false,'name' => 'hendrik', 'email' => 'hendrik@gmail.com', 'password' => bcrypt('password')]);
        $this->call(ProductTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(RoleTableSeeder::class);



    }
}
