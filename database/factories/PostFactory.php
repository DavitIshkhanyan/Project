<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\support\str;
$i = 0;
$factory->define(Post::class, function (Faker $faker) {
    $categories = ['Branding','Lifestyle','Work Stuff'];
    global $i;
    $i++;
    return [
        'header' => $this->faker->sentence(),
        'content' => $this->faker->paragraph(),
        'poster' => 'admin',
        'date' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
        'categorie' => $categories[$i-1],
        'img' => "blog_post_".$i.".jpg",
        'tags' => 'life, nature, life is good',
        'share' => 'facebook, twitter, behance',
    ];
});
