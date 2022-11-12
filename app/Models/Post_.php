<?php

namespace App\Models;


class Post
{

  private static  $blog_posts = [
        [
            "title" => "judul Post Pertama",
            "slug"=> "judul-post-pertama",
            "author"=> "Mhd Fadhil AP",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores facere necessitatibus voluptatem, quaerat perferendis consequatur beatae neque explicabo cupiditate consequuntur fugiat nostrum sunt et enim, totam assumenda labore dolorem aperiam magni eaque. Explicabo quidem eligendi qui vel obcaecati nihil esse est commodi libero quis error earum ullam velit sapiente natus repellendus eius, deleniti quam mollitia veniam harum! Veritatis necessitatibus voluptatem, quaerat perferendis consequatur beatae neque explicabo cupiditate consequuntur fugiat nostrum sunt et enim, totam assumenda labore dolorem aperiam magni eaque. Explicabo quidem eligendi qui vel obcaecati nihil esse est commodi libero quis error earum ullam velit sapiente natus repellendus eius, deleniti quam mollitia veniam harum! Veritatis illo placeat nobis facere cumque impedit adipisci nihil quis expedita esse. Molestias facilis temporibus iure quam ullam distinctio cupiditate dolore recusandae. Porro nulla in illo doloribus eius ratione voluptatum debitis, ullam iste dolorum. Dolor accusantium saepe error ut quod esse, cupiditate eius?"
        ],
        [
            "title" => "judul Post Kedua",
            "slug"=> "judul-post-kedua",
            "author"=> "Mhd Fadhil ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores facere necessitatibus voluptatem, quaerat perferendis consequatur beatae neque explicabo cupiditate consequuntur fugiat nostrum sunt et enim, totam assumenda labore dolorem aperiam magni eaque. Explicabo quidem eligendi qui vel obcaecati nihil esse est commodi libero quis error earum ullam velit sapiente natus repellendus eius, deleniti quam mollitia veniam harum! Veritatis necessitatibus voluptatem, quaerat perferendis consequatur beatae neque explicabo cupiditate consequuntur fugiat nostrum sunt et enim, totam assumenda labore dolorem aperiam magni eaque. Explicabo quidem eligendi qui vel obcaecati nihil esse est commodi libero quis error earum ullam velit sapiente natus repellendus eius, deleniti quam mollitia veniam harum! Veritatis illo placeat nobis facere cumque impedit adipisci nihil quis expedita esse. Molestias facilis temporibus iure quam ullam distinctio cupiditate dolore recusandae. Porro nulla in illo doloribus eius ratione voluptatum debitis, ullam iste dolorum. Dolor accusantium saepe error ut quod esse, cupiditate eius?"
        ]
    ];

     public static function all(){

        return collect(self::$blog_posts);
     }

     public static function find($slug){

      $post = static::all();

      return $post->firstWhere('slug', $slug);
     }

}
