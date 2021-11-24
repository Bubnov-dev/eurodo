<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class JobModel extends BaseApiModel
{

    public static function getAll()
    {
        $response = Http::accept('application/json')->get('https://dev.eurodo.es/api/v1/jobs');
        return $response->json();
    }

    public static function getBySpec(
        $specialties,
        $location = [
            "latitude" => 61.7993562,
            "longitude" => 34.1059989
        ],
        $page = 0,
        $size = 20)
    {
        $body = [
            "q" => "",
            "specialities" => $specialties,
            "distance" => 99990000000,
            "location" => $location,
            "withoutReplies" => false,
            "page" => $page,
            "size" => $size
        ];

        $response = Http::post("https://dev.eurodo.es/api/v1/searches/jobs", $body);

        return $response->json();


    }
}
