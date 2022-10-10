<?php

namespace App\Models;


class Post
{
    private static $blog_post =
    [
        [
            "title" => "Judul Postingan Pertama",
            "slug" => "judul-postingan-pertama",
            "author" => "Doni_rho",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis illum amet reiciendis non? Odio eius ipsa reprehenderit ducimus voluptas! Eum, necessitatibus. Distinctio sequi facilis harum quis blanditiis, velit numquam perferendis aspernatur omnis iusto magnam. Quidem quaerat consectetur alias at et expedita provident, excepturi omnis beatae quae dignissimos eaque soluta. Maxime, iusto, rerum obcaecati earum nostrum aliquid eos sunt iste doloribus necessitatibus quia fugit totam excepturi. Nam corporis eos sit quia. Sunt, vero. Quia doloribus voluptatem provident tempore officia numquam aperiam?",
        ],
        [
            "title" => "Judul Postingan Kedua",
            "slug" => "judul-postingan-kedua",
            "author" => "Dave_growl",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus doloribus dolorum id ut, aut dolor dicta, sequi officia quaerat, cum odit sapiente quasi aperiam sit. Voluptate nesciunt dolor ipsum vitae vero porro doloremque quasi commodi quibusdam? Provident possimus sequi aut temporibus esse rem, aspernatur porro obcaecati amet. Beatae, itaque vero. Tempora non impedit placeat delectus est deleniti adipisci id veritatis possimus reiciendis! Enim doloribus quisquam iste est iusto facilis. Ipsa dolorem voluptate quis quae iste. Non assumenda quam impedit laudantium sequi culpa adipisci laboriosam vitae consectetur maiores? Laboriosam culpa laborum tempora nostrum nihil adipisci vero pariatur quam minima impedit iusto perspiciatis cumque velit modi debitis nulla, eaque natus. Deserunt placeat reprehenderit fugit iure quam repudiandae nobis officia, quia soluta labore!",
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
