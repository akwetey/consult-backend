<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Countries;
use Exception;

class PagesController extends Controller
{
    public function getIso(Request $request)
    {
        try {
            $country = Countries::find($request->id);
            if ($country) {
                return response()->json(['statusCode' => 200, 'data' => $country->iso]);
            }
            return response()->json(['statusCode' => 401, 'message' => 'Error message'], 401);
        }
        catch (Exception $e) {
            return response()->json(['statusCode' => 401, 'message' => $e->getMessage()], 401);
        }
    }
}
