<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
    

        // User::create([
        //     'name' => 'Riski Hasibuan',
        //     'email' => 'riskihasibuan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Rafi Lubis',
        //     'email' => 'rafilubis@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

    //     Post::create([
    //         'title' => 'Judul Pertama',
    //         'slug' => 'judul-pertama',
    //         'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    //         tempor incididunt ut',
    //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    //         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    //         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    //         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    //         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    //         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

    //    Post::create([
    //         'title' => 'Judul kedua',
    //         'slug' => 'judul-ke-dua',
    //         'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    //         tempor incididunt ut',
    //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    //         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    //         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    //         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    //         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    //         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    //         'category_id' => 1,
    //         'user_id' => 1
    //     ]);

        
    //     Post::create([
    //         'title' => 'Judul ketiga',
    //         'slug' => 'judul-ke-tiga',
    //         'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    //         tempor incididunt ut',
    //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    //         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    //         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    //         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    //         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    //         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    //         'category_id' => 2,
    //         'user_id' => 1
    //     ]);

    //     Post::create([
    //         'title' => 'Judul keempat',
    //         'slug' => 'judul-ke-empat',
    //         'excerpt' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    //         tempor incididunt ut',
    //         'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    //         tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    //         quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    //         consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    //         cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    //         proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
    //         'category_id' => 2,
    //         'user_id' => 2
    //     ]);
    }
}
