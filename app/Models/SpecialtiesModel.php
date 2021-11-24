<?php

namespace App\Models;
use Illuminate\Support\Facades\Http;

class SpecialtiesModel extends BaseApiModel
{
    public static function getAll(){
        $response = Http::accept('application/json')->get('https://dev.eurodo.es/api/v1/specialties?langCode=ru');
        return $response->json();
    }
    public static function getAllWithJobTypes(){
        $response = Http::accept('application/json')->get('https://dev.eurodo.es/api/v1/specialties/withJobTypes?langCode=ru');
        return $response->json();
    }

}
