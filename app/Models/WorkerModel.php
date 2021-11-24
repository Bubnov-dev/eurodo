<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class WorkerModel extends BaseApiModel
{
    /**
     *
     * here we get json of user_id with their speciality and for each of them get full info by new request :)
     *
     * @return array|mixed
     *
     */
    public static function getAll($specialties,
                                  $location = [
                                      "latitude" => 61.7993562,
                                      "longitude" => 34.1059989
                                  ],
                                  $page = 0,
                                  $size = 20)
    {

        $response = Http::post('https://dev.eurodo.es/api/v1/searches/users', [
            "q" => "",
            "specialities" => $specialties,
            "distance" => 20000,
            "location" => $location,
            "page" => $page,
            "size" => $size,
            "selectedUserId" => ["5f341a9c33860136d3b9bc96"]]);
        $users = $response->json();

        $userIds = [];
        foreach ($users as $i => $user) {
            $userIds[$i] = $user['_id'];
        }

        $response = Http::post('https://dev.eurodo.es/api/v1/site/users', [
            'users' => $userIds,
            "jobTypeId" => "5f341a9c33860136d3b9bc96"
        ]);

        $userReviews = $response->json();


        $workers = [];
        foreach ($users as $i => $user) {
            $response = Http::accept('application/json')->get('https://dev.eurodo.es/api/v1/users/' . $user['_id'] . "/full");
            $userFull = $response->json();
            /**
             *
             * todo change request to /api/v1/userSpecialties/byUserId/{_id}
             *
             */
            $workers[$i]['name'] = $userFull['profile']['firstname'] . " " . $userFull['profile']['lastname'];
            $workers[$i]['profile-photo'] = $userFull["profile"]['avatar'];
            $k = 0;
            foreach ($userFull['specialties'] as $j => $specialty) {
                $workers[$i]['specialties'][$j] = $specialty['specialty']['title'];
                foreach ($specialty['jobTypes'] as $subSpecialty) {
                    $workers[$i]['sub-specialty'][$k] = $subSpecialty['title'];
                    $k++;
                }

            }
            $workers[$i]['location'] = $userFull["location"]['address'];
            if (isset($userReviews[$i]['rating'])) {
                $workers[$i]['rating'] = [
                    'likes' => $userReviews[$i]['rating']['moreThan4'],
                    'dislikes' => $userReviews[$i]['rating']['lessThan3'],
                    'rate' => $userFull['profile']['rating'] * 100
                ];
            } else {
                $workers[$i]['rating'] = [
                    'likes' => "0",
                    'dislikes' => "0",
                    'rate' => "0"
                ];
            }


            $workers[$i]['examples'] = ['images/image1.png', 'images/image1.png'];
            if (isset($userReviews[$i]['lastReview'])) {
                $workers[$i]['last-review'] = [
                    'text' => $userReviews[$i]['lastReview']['text'],
                    'rate' => $userReviews[$i]['lastReview']['rating'] * 100
                ];
            }
            if (isset($userFull['profile']['reviewsCount'])){
                $workers[$i]['reviewsCount'] = $userFull['profile']['reviewsCount'];
            }
        }

        $workers = ['workers' => $workers];
        return $workers;

        /**
         *
         * [
         * 'name' => "sasha",
         * 'profile-photo' => 'images/image1.png',
         * 'tags' => ['Сантехник', 'Электрик'],
         * 'location' => 'spb, mina st.',
         * 'rating' => ['likes'=>2, 'dislikes' => 3, 'rate' => 40],
         * 'examples' => ['images/image1.png', 'images/image1.png'],
         * 'last-review' => ['text' => 'отзыв текст текст текст', 'rate' => 83],
         *
         * ]
         */
    }
}
