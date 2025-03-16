<?php

namespace Helpers;

use Faker\Factory;
use Models\Employee;
use Models\User;

class RandomGenerator {
    public static function employee(): Employee {
        $faker = Factory::create();
        return new Employee(
            $faker->randomNumber(),
            $faker->firstName(),
            $faker->lastName(),
            $faker->email(),
            $faker->password(),
            $faker->phoneNumber(),
            $faker->address(),
            $faker->dateTimeThisCentury,
            $faker->dateTimeBetween('-10 years', '+20 years'),
            $faker->randomElement(['admin', 'user', 'editor']),
            $faker->jobTitle(),
            100.0,
            $faker->date('Y_m_d'),
            ["Japan", "Asia"],
        );
    }
    public static function employees(): array {
        $employees = [];
        for ($i = 0; $i < 2; $i++) {
            $employees[] = self::employee();
        }
        return $employees;
    }
}