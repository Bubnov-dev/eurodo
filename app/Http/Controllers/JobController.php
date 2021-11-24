<?php

namespace App\Http\Controllers;

use App\Models\JobModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        $rowData = JobModel::getAll();

        $clearData = [];

        foreach ($rowData as $index => $job){
            $clearData['jobs'][$index]['title'] = $job['title'];
            $clearData['jobs'][$index]['price'] = $job['price'];
            $clearData['jobs'][$index]['desc'] = $job['description'];
            $clearData['jobs'][$index]['location'] = $job['location']['address'];
            $clearData['jobs'][$index]['date-time'] = $job['createAt'];
        }

        return view('jobsList', $clearData);

    }
    public function indexBySpec($id)
    {
        $rowData = JobModel::getBySpec([$id]);

        $clearData = [];

        foreach ($rowData as $index => $job){
            $clearData['jobs'][$index]['title'] = $job['title'];
            $clearData['jobs'][$index]['price'] = $job['price'];
            $clearData['jobs'][$index]['desc'] = $job['description'];
            $clearData['jobs'][$index]['location'] = $job['location']['address'];
            $clearData['jobs'][$index]['date-time'] = $job['createAt'];
        }

//        return $rowData;
        return view('jobsList', $clearData);

    }

    public static function getAllWithSpec(){
        $rowData = JobModel::getAll();
        $clearData = [];

        foreach ($rowData as $index => $job){
            $response = Http::accept("application/json")->get("https://dev.eurodo.es/api/v1/specialties/".$job['specialty_id'][0]);
            $json = $response->json();
            $title = $json['title'];
            $clearData[$index]['job'] = $job['title'];
            $clearData[$index]['spec'] = $title;
            $clearData[$index]['id'] = $job['specialty_id'][0];

        }

        return $clearData;
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
