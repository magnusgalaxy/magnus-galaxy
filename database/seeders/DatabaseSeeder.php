<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Sahil Chahal',
            'email' => 'dev.sahilchahal@gmail.com',
            'password' => Hash::make('admin123')
        ]);

        $categories = Category::factory()->count(5)->create();
        $tags = Tag::factory()->count(10)->create();

        $posts = Blog::factory()
            ->count(50)
            ->for($user)
            ->create();

        foreach ($posts as $post) {
            $category = rand(1, 5);
            $tag = rand(1, 10);
            $post->categories()->attach($category);
            $post->tags()->attach($tag);
        }
    }
}
