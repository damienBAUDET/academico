<?php

use Illuminate\Support\Str;

$factory->define(App\Models\User::class, function () {
    $faker = Faker\Factory::create('fr_FR');

    return [
        'firstname' => $faker->name,
        'lastname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => Str::random(10),
        'locale' => 'fr',
    ];
});
