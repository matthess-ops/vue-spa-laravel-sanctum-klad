

<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 5;
        factory(Post::class, $count)->create();
    }
}
