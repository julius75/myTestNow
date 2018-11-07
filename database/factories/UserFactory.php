<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' =>function(){
        return factory('App\User')->create()->id;
        },

        'taggable_id'=>function(){
        return factory('App\Tags')->create()->id;
    },

        'title' => $faker->sentence,
        'description' => $faker->paragraph,
    ];
});

$factory->define(App\Tags::class, function (Faker $faker) {
    $name =$faker->word;
    return [
        'name' => $name,
        'slug'=>$name
    ];
});

$factory->define(App\Application::class, function (Faker $faker) {
    return [
        'user_id' =>function(){
            return factory('App\User')->create()->id;
        },
        'post_id' =>function(){
            return factory('App\Post')->create()->id;
        },
        'introduction' => $faker->sentence,
        'resume' => $faker->word,
    ];
});
//$factory->define(App\Application::class, function (Faker $faker) {
//    return [
//        //'user_id' => 'factory:App\User',
//        //'user_id'=> function() { return factory(App\User::class)->id },
//        'user_id' =>  function () {
//            return App\User::first()->id ?: factory(App\User::class)->create()->id;
//        },
//        'post_id' => App\Post::pluck('id')->random(),
////        'applied_at' => $faker->word,
//        'introduction' => $faker->sentence,
//        'resume'=> $faker->sentence,
//    ];
//});