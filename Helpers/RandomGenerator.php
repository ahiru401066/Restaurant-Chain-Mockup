<?php

namespace Helpers;

use Faker\Factory;
use Models\User;

class RandomGenerator {
    public static function user(): User {
        $faker = Factory::create();

        return new User(
            $faker->randomNumber(),
            $faker->firstName(),
            $faker->lastName(),
            $faker->email(),
            $faker->password(),
            $faker->phoneNumber(),
            $faker->address(),
            $faker->dateTimeThisCentury,
            $faker->dateTimeBetween('-10 years', '+20 years'),
            $faker->randomElement(['admin', 'user', 'editor'])
        );
    }

    public static function users(): array {
        $faker = Factory::create();
        $users = [];

        for ($i = 0; $i < 3; $i++) {
            $users[] = self::user();
        }

        return $users;
    }
}