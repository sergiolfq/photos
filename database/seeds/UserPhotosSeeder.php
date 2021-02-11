<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\User;
use App\Photo;

class UserPhotosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $email = "nick.reynolds@domain.com";

        User::updateOrCreate(['email' => $email],
        [
            "name" => "Nick Reynolds",
            "password" => Hash::make('password'),
            "phone" => "555-555-5555",
            "email" => "nick.reynolds@domain.com",
            "bio" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
            "profile_picture" => "img/profile.jpg",
        ]
        );

        $user = User::where('email', 'nick.reynolds@domain.com')->first();

        Photo::updateOrCreate(['id' => 1],
        [
            'id' => 1,
            "title" => "Nandhaka Pieris",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img" => "img/landscape1.jpg",
            "date" => "2015-05-01",
            "featured" => true,
            "user_id" => $user->id
        ]
        );

        Photo::updateOrCreate(['id' => 2],
        [
            'id' => 2,
            "title" => "New West Calgary",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img" => "img/landscape2.jpg",
            "date" => "2016-05-01",
            "featured" => false,
            "user_id" => $user->id
        ]
        );

        Photo::updateOrCreate(['id' => 3],
        [
            "id" => 3,
            "title" => "Australian Landscape",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img" => "img/landscape3.jpg",
            "date" => "2015-02-02",
            "featured" => false,
            "user_id" => $user->id
        ],
        );

        Photo::updateOrCreate(['id' => 4],
        [
            "id" => 4,
            "title" => "Halvergate Marsh",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img" => "img/landscape4.jpg",
            "date" => "2014-04-01",
            "featured" => true,
            "user_id" => $user->id
        ],
        );

        Photo::updateOrCreate(['id' => 5],
        [
            "id"=>5,
            "title"=> "Rikkis Landscape",
            "description"=> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img"=> "img/landscape5.jpg",
            "date"=> "2010-09-01",
            "featured"=> false,
            "user_id" => $user->id
        ]
        );

        Photo::updateOrCreate(['id' => 6],
        [
            "id" => 6,
            "title" => "Kiddi Kristjans Iceland",
            "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
            "img" => "img/landscape6.jpg",
            "date" => "2015-07-21",
            "featured" => true,
            "user_id" => $user->id
        ]
        );
    }
}
