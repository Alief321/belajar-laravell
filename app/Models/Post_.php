<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "slug" => "judul-post-pertama",
            "tittle" => "Judul Post Pertama",
            "author" => "Megumin",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, consequatur laboriosam provident praesentium eveniet enim deserunt ipsam doloribus quibusdam temporibus voluptas error explicabo assumenda commodi minima aspernatur. Velit rem consequuntur exercitationem aperiam nam quasi nesciunt reiciendis dolores illum. Obcaecati sed dolore exercitationem, eos perferendis vitae repellat dicta odio accusantium, fugiat corrupti deserunt porro dolor magnam modi! Ea dolores ipsa alias accusantium? Sequi molestias harum voluptatem accusantium iure, dolorum ea optio, eos quibusdam unde saepe tempora pariatur in officia magni voluptatum."
        ],
        [
            "slug" => "judul-post-kedua",
            "tittle" => "Judul Post Kedua",
            "author" => "Megumin 2",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, consequatur laboriosam provident praesentium eveniet enim deserunt ipsam doloribus quibusdam temporibus voluptas error explicabo assumenda commodi minima aspernatur. Velit rem consequuntur exercitationem aperiam nam quasi nesciunt reiciendis dolores illum. Obcaecati sed dolore exercitationem, eos perferendis vitae repellat dicta odio accusantium, fugiat corrupti deserunt porro dolor magnam modi! Ea dolores ipsa alias accusantium? Sequi molestias harum voluptatem accusantium iure, dolorum ea optio, eos quibusdam unde saepe tempora pariatur in officia magni voluptatum."
        ]
    ];

    public static function all() 
    {
        return Collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
