<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkerModel;
use Illuminate\Support\Facades\Http;

class WorkerConroller extends Controller
{
    public static function getAll($specialties)
    {
        $rowData = WorkerModel::getAll($specialties);

        return view('workers', $rowData);


        /** example of json code
         *['workers' => [
         * [
         * 'full' => true,
         * 'name' => "sasha",
         * 'profile-photo' => 'images/image1.png',
         * 'tags' => ['Сантехник', 'Электрик'],
         * 'location' => 'spb, mina st.',
         * 'rating' => ['likes'=>2, 'dislikes' => 3, 'rate' => 40],
         * 'examples' => ['images/image1.png', 'images/image1.png'],
         * 'last-review' => ['text' => 'отзыв текст текст текст', 'rate' => 83],
         *
         * ],
         * [
         * 'full' => true,
         * 'name' => "sasha",
         * 'profile-photo' => 'images/image1.png',
         * 'tags' => ['Сантехник', 'Электрик'],
         * 'location' => 'spb, mina st.',
         * 'rating' => ['likes'=>2, 'dislikes' => 3, 'rate' => 40],
         * 'examples' => ['images/image1.png', 'images/image1.png'],
         * 'last-review' => ['text' => 'отзыв текст текст текст', 'rate' => 83],
         * ]
         * ]]
         */
    }

    public static function getOne($id)
    {
        $rowData = WorkerModel::getById($id);
        $response = Http::post('https://dev.eurodo.es/api/v1/site/users', [
            'users' => $rowData['_id'],
            "jobTypeId" => "5f341a9c33860136d3b9bc96"
        ]);

        $userRate = $response->json();

        $response = Http::acceptJson()->get("https://dev.eurodo.es/api/v1/reviews/user/".$id);
        $userReviews = $response->json();

        $clearData = [];

        $clearData = [
            'name' => $rowData['profile']['firstname'] . " " . $rowData['profile']['lastname'],
            'profile-photo' => $rowData['profile']['avatar'],
            'location' => $rowData['location']['address'],
            'profile-desc' => $rowData['profile']['about'],
            'examples' => ['images/image2.png', 'images/image1.png'],


        ];

        if (isset($userRate['rating'])) {
            $clearData['rating'] = [
                "average" => "0",

                'likes' => $userRate['rating']['moreThan4'],
                'dislikes' => $userRate['rating']['lessThan3'],
                'rate' => $rowData['profile']['rating'] * 100
            ];
        } else {
            $clearData['rating'] = [
                "average" => "0",
                'likes' => "0",
                'dislikes' => "0",
                'rate' => "0"
            ];
        }

        foreach ($rowData['specialties'] as $index => $specialty) {
            $clearData['specialties'][$index]['title'] = $specialty['specialty']['title'];
            foreach ($specialty['jobTypes'] as $i => $jobType) {
                $clearData['specialties'][$index]['jobs'][$i] = $jobType['title'];
            }
        }

        $clearData['reviews'] = [];

        foreach ($userReviews as $index => $review){
            $response = Http::acceptJson()->get("https://dev.eurodo.es/api/v1/users/".$review['user_id']);
            $user = $response->json();
            $clearData['reviews'][$index] = [
                'user'=>[
                        'photo' => $user['profile']['avatar'],
                        'name' => $user['firstname']." ".$user['lastname'],
                        'likes' => -1,
                        'dislikes' => -1,
                ],
                'rate' => $review['rating'],
                'job-title' => $review['title'],
                'text' => $review['text'],
                'date' => $review['createAt']
                ];
        }

        return view('worker-card', ["item" => $clearData]);
    }
}
