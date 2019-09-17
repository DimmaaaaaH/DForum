<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reply;

$factory->define(App\Thread::class, function ($faker) {
    return [
        'user_id' => function() {
        return factory('App\User')->create()->id;
        },

        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});


$factory->define(App\Reply::class, function ($faker) {
    return [
        'thread_id' => function () {
            return factory('App\Thread')->create()->id;
        },'user_id' => function () {
            return factory('App\User')->create()->id;
        },

        'body' => $faker->paragraph
    ];
});
