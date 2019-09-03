<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Thread::class, function ($faker) {
    return [
        'user_id' => function() {
        return factory('App\User')->create()->id;
        },

        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});
