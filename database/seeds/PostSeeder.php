<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = 'bài viết 1';
        $post->slug = 'bai-viet-1';
        $post->image = 'q.jpg';
        $post->content ='lorem';
        $post->user_id = '1';
        $post->save();
    }
}
