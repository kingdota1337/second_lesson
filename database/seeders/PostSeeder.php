<?php

namespace Database\Seeders;

use App\Models\Posts\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor in',
                'user_id' => 1,
            ],
            [
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor in',
                'user_id' => 2,
            ] 
        ];

        foreach($data as $element) {
            Post::create($element);
        }
    }
}
