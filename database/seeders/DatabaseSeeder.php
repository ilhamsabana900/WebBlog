<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // User::create([
        //     'name'=> 'ilhams',
        //     'email'=>'ilhamsabana100@gmail.com',
        //     'password' =>bcrypt('1234')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'=> 'Web Programing',
            'slug'=> 'web-programing'
        ]);

        Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);
        Category::create([
            'name'=> 'Web Desaign',
            'slug'=> 'web-desaign'
        ]);

        Post::factory(20)->create();

        
        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat recusandae amet omnis.',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo illum perferendis vel recusandae sint quidem cum earum optio saepe ab nulla voluptatum itaque, maiores architecto quibusdam beatae quis dolor iste ut veritatis facere magni quasi? Magnam deserunt adipisci cumque nobis! Esse, aspernatur. Sed, alias perferendis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos porro eum unde aspernatur nam, molestiae, odio repudiandae expedita aperiam qui aliquid cum?</p>',
        //     'category_id'=> 1,
        //     'user_id'=> 1
        // ]);

        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat recusandae amet omnis.',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo illum perferendis vel recusandae sint quidem cum earum optio saepe ab nulla voluptatum itaque, maiores architecto quibusdam beatae quis dolor iste ut veritatis facere magni quasi? Magnam deserunt adipisci cumque nobis! Esse, aspernatur. Sed, alias perferendis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos porro eum unde aspernatur nam, molestiae, odio repudiandae expedita aperiam qui aliquid cum?</p>',
        //     'category_id'=> 1,
        //     'user_id'=> 1
        // ]);
        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat recusandae amet omnis.',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo illum perferendis vel recusandae sint quidem cum earum optio saepe ab nulla voluptatum itaque, maiores architecto quibusdam beatae quis dolor iste ut veritatis facere magni quasi? Magnam deserunt adipisci cumque nobis! Esse, aspernatur. Sed, alias perferendis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos porro eum unde aspernatur nam, molestiae, odio repudiandae expedita aperiam qui aliquid cum?</p>',
        //     'category_id'=> 2,
        //     'user_id'=> 1
        // ]);
        // Post::create([
        //     'title'=>'Judul Keempat',
        //     'slug'=>'judul-keempat',
        //     'excerpt'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat recusandae amet omnis.',
        //     'body'=> '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo illum perferendis vel recusandae sint quidem cum earum optio saepe ab nulla voluptatum itaque, maiores architecto quibusdam beatae quis dolor iste ut veritatis facere magni quasi? Magnam deserunt adipisci cumque nobis! Esse, aspernatur. Sed, alias perferendis.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos porro eum unde aspernatur nam, molestiae, odio repudiandae expedita aperiam qui aliquid cum?</p>',
        //     'category_id'=> 2,
        //     'user_id'=> 1
        // ]);
       
    }
}
