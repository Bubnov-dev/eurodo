<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ['spec' => [
        ['title' => "title1"],
        ['title' => "title2"]
    ],  'jobTypes' => [
        ['title' => "title1", "jobs" => [['jobTitle' => "title1"], ['jobTitle' => "title1"]]],
        ['title' => "title1", "jobs" => [['jobTitle' => "title1"], ['jobTitle' => "title1"]]],
        ['title' => "title1", "jobs" => [['jobTitle' => "title1"], ['jobTitle' => "title1"], ['jobTitle' => "title1"]]],
    ]
    ]);
});

Route::get('/workers', function (){
    return view('workers', ['workers' => [
        [
            'full' => true,
            'name' => "sasha",
            'tags' => ['Сантехник', 'Электрик'],
            'location' => 'spb, mina st.',
            'rating' => ['likes'=>2, 'dislikes' => 3, 'rate' => 40],
            'examples' => ['images/image1.png', 'images/image1.png'],
            'last-review' => ['text' => 'отзыв текст текст текст', 'rate' => 83],

        ],
        [
            'full' => true,
            'name' => "sasha",
            'tags' => ['Сантехник', 'Электрик'],
            'location' => 'spb, mina st.',
            'rating' => ['likes'=>2, 'dislikes' => 3, 'rate' => 40],
            'examples' => ['images/image1.png', 'images/image1.png'],
            'last-review' => ['text' => 'отзыв текст текст текст', 'rate' => 83],
        ]
    ]]);
});

Route::get('/workers/{id}', function (){
    return view('worker-card', [ 'item' =>
        [
            'name' => "sasha",
            'profile-photo' => 'images/image1.png',
            'location' => 'spb, mina st.',
            'rating' => ['average' => '1.3','likes'=>2, 'dislikes' => 3, 'rate' => 40],
            'profile-desc' => 'bla blaa lsla lala',
            'examples' => ['images/image2.png', 'images/image1.png'],
            'specialties' => [
                [
                    'title' => 'spec1',
                    'jobs' => ['job1', 'job2', 'job3']
                ]
            ],
            'reviews' => [
                [
                    'user' => [
                        'photo' => 'images/image1.png',
                        'name' => 'name',
                        'likes' => 12,
                        'dislikes' => 2,
                    ],
                    'rate' => 32,
                    'job-title' => 'title',
                    'text' => 'хуева, не понравилось',
                    'date' => '12.12.12'
                ]
            ]

        ]]);
});
