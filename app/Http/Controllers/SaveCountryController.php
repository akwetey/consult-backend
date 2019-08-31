<?php

namespace App\Http\Controllers;
use App\SaveCountry;
use App\Countries;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SaveCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

          $country = Countries::select('iso3')
             ->where('id','=', $request->country_id)
             ->first();

          $country = new SaveCountry();

          $country->country_id = $request->country_id;

           if($country->save()){

                return response()->json(['status'=> 200, 'iso'=>$country]);
            }

            return response()->json(['error' => 400]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SaveCountry  $saveCountry
     * @return \Illuminate\Http\Response
     */
    public function show(SaveCountry $saveCountry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SaveCountry  $saveCountry
     * @return \Illuminate\Http\Response
     */
    public function edit(SaveCountry $saveCountry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SaveCountry  $saveCountry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaveCountry $saveCountry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SaveCountry  $saveCountry
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaveCountry $saveCountry)
    {
        //
    }
}
