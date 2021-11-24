<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecialtiesModel;
use Illuminate\View\View;

class SpecialitiesController extends Controller
{
    /**
     * Display a listing of specialities with jobs_specialties;
     *
     * @return View
     */
    public static function index()
    {
        $rowData = SpecialtiesModel::getAllWithJobTypes();

        $clearData = [];



        foreach ($rowData as $index => $item){
            $clearData['spec'][$index]['title'] = $item['specialty']['title'];
            $clearData['spec'][$index]['icon'] = $item['specialty']['icon'];

            $clearData['jobTypes'][$index]['title'] = $item['specialty']['title'];
            $clearData['jobTypes'][$index]['id'] = $item['_id'];
            $i = 0;
            $item['jobTypes'] = array_filter($item['jobTypes'], function ($jobType){
                return ($jobType['type'] === 'specialty');
            });
            foreach ($item['jobTypes'] as $jobType){
                $clearData['jobTypes'][$index]['jobs'][$i]['jobTitle']= $jobType['title'];
                $clearData['jobTypes'][$index]['jobs'][$i]['id']= $jobType['_id'];
                $i++;
            }

        }
        return view('home', $clearData);
//

//        return $clearData;
        $ret = [
            'spec' => [
                ['title' => "title1"],
                ['title' => "title2"]
            ],  'jobTypes' => [
                ['title' => "title1", "jobs" => [['jobTitle' => "title1"], ['jobTitle' => "title1"]]],
                ['title' => "title1", "jobs" => [['jobTitle' => "title1"], ['jobTitle' => "title1"]]],
                ['title' => "title1", "jobs" => [['jobTitle' => "title1"], ['jobTitle' => "title1"], ['jobTitle' => "title1"]]],
            ]
        ];

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
