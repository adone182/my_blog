<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Romadoni',
            'username' => 'romadoni',
            'email' => 'romadoniofficial@gmail.com',
            'password' => bcrypt(12345)
        ]);

        // User::create([
        //     'name' => 'Frankie jong',
        //     'email' => 'jongFrankie@gmail.com',
        //     'password' => bcrypt(321321)
        // ]);

        User::factory(4)->create();

        Post::factory(30)->create();

        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Lifestyle',
            'slug' => 'lifestyle'
        ]);

        Category::create([
            'name' => 'Sports',
            'slug' => 'sports'
        ]);

        Category::create([
            'name' => 'Foods',
            'slug' => 'foods'
        ]);

        Category::create([
            'name' => 'Automotive',
            'slug' => 'automotive'
        ]);

        // Post::create([
        //     'title' => 'Judul Posting Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'loremfa-rotate-180',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam rem obcaecati quos quia odio dicta quod maiores, natus modi reprehenderit commodi nesciunt repellendus omnis. Et saepe quod, reiciendis sed dolore impedit assumenda blanditiis ullam architecto numquam debitis nesciunt fugit sapiente quia ex. Minima harum aliquid ratione ipsum officiis velit nisi. Eius architecto reiciendis ipsa atque veniam, voluptas facere ad odit id, pariatur laborum repudiandae quasi aut nisi doloribus deleniti assumenda molestias labore tenetur exercitationem! Pariatur, animi debitis ratione blanditiis sint consectetur hic ut, asperiores sunt dolores porro distinctio neque eum, veniam fugiat dolor explicabo ipsa laborum quod facere. Dolores pariatur quod obcaecati tempora asperiores nostrum quasi nobis similique maxime possimus voluptates a aperiam culpa excepturi exercitationem neque, minus repudiandae enim nemo consequuntur dicta.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Posting Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'loremfa-rotate-180',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam rem obcaecati quos quia odio dicta quod maiores, natus modi reprehenderit commodi nesciunt repellendus omnis. Et saepe quod, reiciendis sed dolore impedit assumenda blanditiis ullam architecto numquam debitis nesciunt fugit sapiente quia ex. Minima harum aliquid ratione ipsum officiis velit nisi. Eius architecto reiciendis ipsa atque veniam, voluptas facere ad odit id, pariatur laborum repudiandae quasi aut nisi doloribus deleniti assumenda molestias labore tenetur exercitationem! Pariatur, animi debitis ratione blanditiis sint consectetur hic ut, asperiores sunt dolores porro distinctio neque eum, veniam fugiat dolor explicabo ipsa laborum quod facere. Dolores pariatur quod obcaecati tempora asperiores nostrum quasi nobis similique maxime possimus voluptates a aperiam culpa excepturi exercitationem neque, minus repudiandae enim nemo consequuntur dicta.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Posting Ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'loremfa-rotate-180',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam rem obcaecati quos quia odio dicta quod maiores, natus modi reprehenderit commodi nesciunt repellendus omnis. Et saepe quod, reiciendis sed dolore impedit assumenda blanditiis ullam architecto numquam debitis nesciunt fugit sapiente quia ex. Minima harum aliquid ratione ipsum officiis velit nisi. Eius architecto reiciendis ipsa atque veniam, voluptas facere ad odit id, pariatur laborum repudiandae quasi aut nisi doloribus deleniti assumenda molestias labore tenetur exercitationem! Pariatur, animi debitis ratione blanditiis sint consectetur hic ut, asperiores sunt dolores porro distinctio neque eum, veniam fugiat dolor explicabo ipsa laborum quod facere. Dolores pariatur quod obcaecati tempora asperiores nostrum quasi nobis similique maxime possimus voluptates a aperiam culpa excepturi exercitationem neque, minus repudiandae enim nemo consequuntur dicta.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
