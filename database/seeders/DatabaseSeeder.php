<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'username'=> 'admin',
            'email' => 'Admin.@gmail.com',
            'password' => bcrypt('1234')
        ]);

        // User::create([
        //     'name' => 'Kazuma',
        //     'email' => 'Kazuma.gmail.com',
        //     'password' => bcrypt('1234')
        // ]);

        // FACTORY FOR USER
        User::factory(3)->create();

        Category::create([
            'name' => 'Games',
            'slug' => 'games'
        ]);

        Category::create([
            'name' => 'Art',
            'slug' => 'art'
        ]);

        Category::create([
            'name' => 'Science',
            'slug' => 'science'
        ]);

        // FACTORY FOR POST
        Post::factory(20)->create();

        
        // Post::create([
        //     'title'=> 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'except' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et sed minima facilis adipisci aperiam tenetur, deleniti',
        //     'body' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et sed minima facilis adipisci aperiam tenetur, deleniti sit ab illum? Possimus eligendi, animi alias quo, natus impedit facere quia dolore ullam perferendis deserunt tempore cupiditate voluptatum, architecto doloribus voluptas consequuntur? Praesentium molestiae recusandae ipsam similique tempora id dolore facilis commodi? Necessitatibus possimus assumenda voluptatibus deserunt eos maiores dolor eveniet inventore tenetur nemo. Dolores eligendi officia dolor quis tempore ea facilis magni! Consectetur hic rem libero veritatis ea velit aliquam maiores eligendi voluptates illum veniam cupiditate nobis deleniti vel magni, ullam excepturi ducimus voluptatem optio quas itaque magnam! Temporibus placeat hic laboriosam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title'=> 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'except' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et sed minima facilis adipisci aperiam tenetur, deleniti',
        //     'body' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et sed minima facilis adipisci aperiam tenetur, deleniti sit ab illum? Possimus eligendi, animi alias quo, natus impedit facere quia dolore ullam perferendis deserunt tempore cupiditate voluptatum, architecto doloribus voluptas consequuntur? Praesentium molestiae recusandae ipsam similique tempora id dolore facilis commodi? Necessitatibus possimus assumenda voluptatibus deserunt eos maiores dolor eveniet inventore tenetur nemo. Dolores eligendi officia dolor quis tempore ea facilis magni! Consectetur hic rem libero veritatis ea velit aliquam maiores eligendi voluptates illum veniam cupiditate nobis deleniti vel magni, ullam excepturi ducimus voluptatem optio quas itaque magnam! Temporibus placeat hic laboriosam!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title'=> 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'except' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et sed minima facilis adipisci aperiam tenetur, deleniti',
        //     'body' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et sed minima facilis adipisci aperiam tenetur, deleniti sit ab illum? Possimus eligendi, animi alias quo, natus impedit facere quia dolore ullam perferendis deserunt tempore cupiditate voluptatum, architecto doloribus voluptas consequuntur? Praesentium molestiae recusandae ipsam similique tempora id dolore facilis commodi? Necessitatibus possimus assumenda voluptatibus deserunt eos maiores dolor eveniet inventore tenetur nemo. Dolores eligendi officia dolor quis tempore ea facilis magni! Consectetur hic rem libero veritatis ea velit aliquam maiores eligendi voluptates illum veniam cupiditate nobis deleniti vel magni, ullam excepturi ducimus voluptatem optio quas itaque magnam! Temporibus placeat hic laboriosam!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title'=> 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'except' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et sed minima facilis adipisci aperiam tenetur, deleniti',
        //     'body' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et sed minima facilis adipisci aperiam tenetur, deleniti sit ab illum? Possimus eligendi, animi alias quo, natus impedit facere quia dolore ullam perferendis deserunt tempore cupiditate voluptatum, architecto doloribus voluptas consequuntur? Praesentium molestiae recusandae ipsam similique tempora id dolore facilis commodi? Necessitatibus possimus assumenda voluptatibus deserunt eos maiores dolor eveniet inventore tenetur nemo. Dolores eligendi officia dolor quis tempore ea facilis magni! Consectetur hic rem libero veritatis ea velit aliquam maiores eligendi voluptates illum veniam cupiditate nobis deleniti vel magni, ullam excepturi ducimus voluptatem optio quas itaque magnam! Temporibus placeat hic laboriosam!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
