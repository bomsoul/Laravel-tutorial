<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        $schedulesArray = [
            [
                'order' => 1,
                'id' =>'01418232',
                'name' => 'Algorithm Design & Analysis',
                'credit' => 3,
                'grade' => 'C+'

            ],
            [
                'order'=> 2,
                'id' =>'01418332',
                'name' => 'Operating Systems',
                'credit' => 4,
                'grade' => 'C'
            ],
            [
                'order'=> 3,
                'id' =>'01418333',
                'name' => 'Formal Language & Automata Theory',
                'credit' => 3,
                'grade' => 'C'
            ],
            [
                'order'=> 4,
                'id' =>'01418343',
                'name' => 'Intellitual Property for Software & Digital Contents',
                'credit' => 3,
                'grade' => 'C+'
            ],
            [
                'order'=> 5,
                'id' =>'01418421',
                'name' => 'Human Computer Interaction',
                'credit' => 3,
                'grade' => 'A'
            ],
            [
                'order'=> 6,
                'id' =>'01418443',
                'name' => 'Web Technology & Web services',
                'credit' => 3,
                'grade' => 'D+'
            ],
            [
                'order'=> 7,
                'id' =>'01418497',
                'name' => 'Seminar',
                'credit' => 1,
                'grade' => 'B'
            ]
        ];
        return view('schedule.all-schedule')->with('schedulesArray',$schedulesArray);
    }

    public function grade($order){
        $gradeArray = [
            [
                'order' => 1,
                'id' =>'01418232',
                'name' => 'Algorithm Design & Analysis',
                'credit' => 3,
                'grade' => 'C+',
                'mid' => 11,
                'final' => 22

            ],
            [
                'order'=> 2,
                'id' =>'01418332',
                'name' => 'Operating Systems',
                'credit' => 4,
                'grade' => 'C',
                'mid' => 11,
                'final' => 25
            ],
            [
                'order'=> 3,
                'id' =>'01418333',
                'name' => 'Formal Language & Automata Theory',
                'credit' => 3,
                'grade' => 'C',
                'mid' => 30,
                'final' => 34
            ],
            [
                'order'=> 4,
                'id' =>'01418343',
                'name' => 'Intellitual Property for Software & Digital Contents',
                'credit' => 3,
                'grade' => 'C+',
                'mid' => 26,
                'final' => 40
            ],
            [
                'order'=> 5,
                'id' =>'01418421',
                'name' => 'Human Computer Interaction',
                'credit' => 3,
                'grade' => 'A',
                'mid' => 50,
                'final' => 35
            ],
            [
                'order'=> 6,
                'id' =>'01418443',
                'name' => 'Web Technology & Web services',
                'credit' => 3,
                'grade' => 'D+',
                'mid' => 32,
                'final' => '-'
            ],
            [
                'order'=> 7,
                'id' =>'01418497',
                'name' => 'Seminar',
                'credit' => 1,
                'grade' => 'B',
                'mid' => 30,
                'final' => 40
            ]
        ];

        return view('schedule.grade', ['schedule' => $gradeArray[$order - 1]]);
    }
}
