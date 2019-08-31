<?php

namespace App\Http\Controllers;

use App\Countries;
use Illuminate\Http\Request;
use Exception;
class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Countries::select('id','nicename','iso3')->orderBy('nicename')->get();
        return response()->json($countries);
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
     * @param  \App\Countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function show(Countries $countries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function edit(Countries $countries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Countries $countries)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function destroy(Countries $countries)
    {
        //
    }

    public function verifyIso(Request $request)
    {

            
        try {
         $country = Countries::find($request->id);
            if ($country) {
                return response()->json(['statusCode' => 200, 'iso' => $country->iso3]);
            }
            return response()->json(['statusCode' => 401, 'message' => 'Error message'], 401);
        }
        catch (Exception $e) {
            return response()->json(['statusCode' => 401, 'message' => $e->getMessage()], 401);
        }
    }


}
