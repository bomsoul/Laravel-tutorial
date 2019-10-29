<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        return view('about' ,[
            'name' => "Teerayuth Artidakorn",
            'id' => "5910450409",
            'date' => "8 Apr 1997",
            'address' => "Kasetsart University",
            'image' => 'https://scontent.fbkk2-8.fna.fbcdn.net/v/t1.0-9/55505733_2520420471320480_1460916963772465152_n.jpg?_nc_cat=102&_nc_eui2=AeEwBqlt6H_tjVBwkgXzYICBa7WsDfcnlsnHAYx9A5FHrFGF5wFJZGbRllMjjkwmx00pbmiD34LQOHblqXggGD8hZ5vFih8MWcnX8UzKqubTqA&_nc_ht=scontent.fbkk2-8.fna&oh=56f8f0ea167905c293a8eea9e33fa435&oe=5D04607C',
            'year' => 3,
            'faculty' => 'Science',
            'department' => 'Computer-Science',
            'mail' => 'teerayuth.a@ku.th'
        ]);
    }
}
