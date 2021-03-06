<?php

use App\Models\JobModel;
use App\Models\SpecialtiesModel;
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
Route::get('/test', function () {
//    $ret = [
//        'spec' => [
//            ['title' => "title1"],
//            ['title' => "title2"]
//        ],  'jobTypes' => [
//            ['title' => "title1", "jobs" => [['jobTitle' => "title1"], ['jobTitle' => "title1"]]],
//            ['title' => "title1", "jobs" => [['jobTitle' => "title1"], ['jobTitle' => "title1"]]],
//            ['title' => "title1", "jobs" => [['jobTitle' => "title1"], ['jobTitle' => "title1"], ['jobTitle' => "title1"]]],
//        ]
//    ];
    return \App\Models\WorkerModel::getAll();
//    return \App\Http\Controllers\JobController::getAllWithSpec();


});
Route::get('/', function () {
    return \App\Http\Controllers\SpecialitiesController::index();
});

Route::get('/workers', function (){
    return view('workers', ['workers' => [
        [
            'full' => true,
            'name' => "sasha",
            'profile-photo' => 'images/image1.png',
            'sub-specialty' => ['Сантехник', 'Электрик'],
            'location' => 'spb, mina st.',
            'rating' => ['likes'=>2, 'dislikes' => 3, 'rate' => 40],
            'examples' => ['images/image1.png', 'images/image1.png'],
            'last-review' => ['text' => 'отзыв текст текст текст', 'rate' => 83],

        ],
        [
            'full' => true,
            'name' => "sasha",
            'profile-photo' => 'images/image1.png',
            'sub-specialty' => ['Сантехник', 'Электрик'],
            'location' => 'spb, mina st.',
            'rating' => ['likes'=>2, 'dislikes' => 3, 'rate' => 40],
            'examples' => ['images/image1.png', 'images/image1.png'],
            'last-review' => ['text' => 'отзыв текст текст текст', 'rate' => 83],
        ]
    ]]);
});

Route::get('/workers/cat/{id}', function ($id){
    return \App\Http\Controllers\WorkerConroller::getAll([$id]);
});

Route::get('/workers/{id}', function ($id){
    return \App\Http\Controllers\WorkerConroller::getOne($id);
});


//todo delete
Route::get('/specialties/{id}', function ($id){
    return \App\Http\Controllers\JobController::indexBySpec($id);
});


Route::get('/jobs', function (\Illuminate\Http\Request $request) {
    return \App\Http\Controllers\JobController::getAllByParams($request);
});


Route::get('/req', function (\Illuminate\Http\Request $request) {
    return \App\Http\Controllers\JobController::getParams($request);
});
