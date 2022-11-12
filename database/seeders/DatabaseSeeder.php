<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::create([
           'name' => 'Mhd Fadhil AP',
           'username' => 'padhil',
           'email' => 'fadhilgaming22@gmail.com',
           'password' => bcrypt('fadhil12345')
        ]);


        // User::create([
        //     'name' => 'Mark Zuckberg',
        //     'email' => 'markzuberg@gmail.com',
        //     'password' => bcrypt('12345')
        //  ]);

         User::factory(3)->create();

        Category::create([
             'name' => 'Web Design',
             'slug' => 'web-design'
        ]);


        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
       ]);


        Category::create([
            'name' => 'Personal',
            'slug' =>'personal'
        ]);

        Post::factory(10)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod facilis deleniti nemo, libero, sapiente corrupti ea non mollitia voluptatem voluptatibus ipsa enim quia! Aliquid nostrum sapiente modi quo sit alias!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus labore culpa a, dolores ad illo illum eum unde. Vel eaque consectetur distinctio, tenetur nihil velit adipisci ut libero, perspiciatis soluta optio officia voluptatem voluptas harum, dolorum alias ipsam obcaecati inventore iste vitae? Enim dolores rerum facilis laboriosam quidem ad esse ipsum numquam unde eius? Debitis aspernatur harum rem, delectus porro ipsam magni impedit, fugit similique dolores, soluta reprehenderit recusandae excepturi voluptatibus quisquam fugiat laborum cupiditate aliquam? Maxime tenetur exercitationem voluptate asperiores voluptatem accusamus porro eum voluptates placeat cumque inventore incidunt aliquid laborum eius, hic qui aut tempore explicabo saepe aliquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);




        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod facilis deleniti nemo, libero, sapiente corrupti ea non mollitia voluptatem voluptatibus ipsa enim quia! Aliquid nostrum sapiente modi quo sit alias!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus labore culpa a, dolores ad illo illum eum unde. Vel eaque consectetur distinctio, tenetur nihil velit adipisci ut libero, perspiciatis soluta optio officia voluptatem voluptas harum, dolorum alias ipsam obcaecati inventore iste vitae? Enim dolores rerum facilis laboriosam quidem ad esse ipsum numquam unde eius? Debitis aspernatur harum rem, delectus porro ipsam magni impedit, fugit similique dolores, soluta reprehenderit recusandae excepturi voluptatibus quisquam fugiat laborum cupiditate aliquam? Maxime tenetur exercitationem voluptate asperiores voluptatem accusamus porro eum voluptates placeat cumque inventore incidunt aliquid laborum eius, hic qui aut tempore explicabo saepe aliquam.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);



        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod facilis deleniti nemo, libero, sapiente corrupti ea non mollitia voluptatem voluptatibus ipsa enim quia! Aliquid nostrum sapiente modi quo sit alias!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus labore culpa a, dolores ad illo illum eum unde. Vel eaque consectetur distinctio, tenetur nihil velit adipisci ut libero, perspiciatis soluta optio officia voluptatem voluptas harum, dolorum alias ipsam obcaecati inventore iste vitae? Enim dolores rerum facilis laboriosam quidem ad esse ipsum numquam unde eius? Debitis aspernatur harum rem, delectus porro ipsam magni impedit, fugit similique dolores, soluta reprehenderit recusandae excepturi voluptatibus quisquam fugiat laborum cupiditate aliquam? Maxime tenetur exercitationem voluptate asperiores voluptatem accusamus porro eum voluptates placeat cumque inventore incidunt aliquid laborum eius, hic qui aut tempore explicabo saepe aliquam.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);



        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod facilis deleniti nemo, libero, sapiente corrupti ea non mollitia voluptatem voluptatibus ipsa enim quia! Aliquid nostrum sapiente modi quo sit alias!',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus labore culpa a, dolores ad illo illum eum unde. Vel eaque consectetur distinctio, tenetur nihil velit adipisci ut libero, perspiciatis soluta optio officia voluptatem voluptas harum, dolorum alias ipsam obcaecati inventore iste vitae? Enim dolores rerum facilis laboriosam quidem ad esse ipsum numquam unde eius? Debitis aspernatur harum rem, delectus porro ipsam magni impedit, fugit similique dolores, soluta reprehenderit recusandae excepturi voluptatibus quisquam fugiat laborum cupiditate aliquam? Maxime tenetur exercitationem volfadhilgaming22uptate asperiores voluptatem accusamus porro eum voluptates placeat cumque inventore incidunt aliquid laborum eius, hic qui aut tempore explicabo saepe aliquam.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
