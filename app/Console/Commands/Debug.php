<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\Thread;
use Illuminate\Console\Command;

class Debug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:debug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //print_r(Post::query()->where('id', 3)->get()->toArray());
        //$post = Post::query()->firstWhere('id', 3);
//        $thread = Thread::query()->firstWhere('id', 1);
//        print_r($thread->toArray());
//        echo "\n";
//        $posts = $thread->posts;
//        foreach ($posts as $post) {
//            print_r(value: $post->content);
//            echo "\n";
//        }

    }
}
