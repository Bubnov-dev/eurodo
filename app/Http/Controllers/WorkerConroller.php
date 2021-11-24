<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkerModel;

class WorkerConroller extends Controller
{
    public static function getAll($specialties){
        $rowData = WorkerModel::getAll($specialties);

        return view('workers', $rowData);


        /** example of json code
         *['workers' => [
            [
            'full' => true,
            'name' => "sasha",
            'profile-photo' => 'images/image1.png',
            'tags' => ['Сантехник', 'Электрик'],
            'location' => 'spb, mina st.',
            'rating' => ['likes'=>2, 'dislikes' => 3, 'rate' => 40],
            'examples' => ['images/image1.png', 'images/image1.png'],
            'last-review' => ['text' => 'отзыв текст текст текст', 'rate' => 83],

            ],
            [
            'full' => true,
            'name' => "sasha",
            'profile-photo' => 'images/image1.png',
            'tags' => ['Сантехник', 'Электрик'],
            'location' => 'spb, mina st.',
            'rating' => ['likes'=>2, 'dislikes' => 3, 'rate' => 40],
            'examples' => ['images/image1.png', 'images/image1.png'],
            'last-review' => ['text' => 'отзыв текст текст текст', 'rate' => 83],
            ]
        ]]
         */
    }
}
