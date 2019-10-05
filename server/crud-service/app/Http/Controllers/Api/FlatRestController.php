<?php

namespace App\Http\Controllers\Api;

use App\Floor;
use App\Flat;
use App\Http\Controllers\Controller;

class FlatRestController extends Controller
{
    public function all()
    {
        // Fecthing all the flatsfrom the database
        $flats = Flat::all();

        // Returning the list of flats to the user with response code 200.
        return response()->json($flats, 200);
    }

    public function allByFloor($id)
    {
        // Checking if any such floor exists or not.
        Floor::findOrFail($id);

        // Fetching all the flats with the given society id
        $flats = Flat::where("society_id", $id)
            ->get();

        // Verifying whether records are fetched or not
        if($flats) {
            // If Yes then returning the flats to the user with status code 200.
            return response()->json($flats, 200);
        }

        // Otherwise returning 500 to the user coz some issue occurred
        return response()->json([
            "message" => "Some internal server error occurred"
        ], 500);
    }
}
