<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Subject;
class UsersTableRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->state('admin')->create(
            [
                'name' =>'admin',
                'password' => bcrypt('admin'),
                'role' => 'ADMINISTRATOR'
            ]
        );
        factory(User::class,10)->state('teacher')->create()
            ->each(function ($user) {
                $user->subjects()->saveMany(
                    factory(Subject::class, 5)->make());
                }
            );
        factory(User::class,1000)->create(
            [
                'password' => bcrypt('student'),
                'role' => 'STUDENT'
            ]
        );

    }
}
