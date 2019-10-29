<?php

use Faker\Generator as Faker;
use App\Subject;

$factory->define(Subject::class, function (Faker $faker) {
    return [
        'subj_id' => rand(00000000,99999999),
        'subj_name' => $faker->realText(30),
        'lec_credit' => rand(0,4),
        'lab_credit' => rand(0,3),
        'prerequisite' => '-'
    ];
});
