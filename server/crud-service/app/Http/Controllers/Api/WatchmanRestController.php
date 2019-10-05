<?php

namespace App\Http\Controllers\Api;

use App\Building;
use App\Floor;
use App\Society;
use App\Watchman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WatchmanRestController extends Controller
{

    public function all()
    {
        // Fecthing all the watchmen from the database
        $floors = Watchman::all();

        // Returning the list of watchmen to the user with response code 200.
        return response()->json($floors, 200);
    }

    public function allBySociety($id)
    {
        // Checking if any such building exists or not.
        Society::findOrFail($id);

        // Fetching all the floors with the given society id
        $societies = Watchman::where("society_id", $id)
            ->get();

        // Verifying whether records are fetched or not
        if($societies) {
            // If Yes then returning the watchmen to the user with status code 200.
            return response()->json($societies, 200);
        }

        // Otherwise returning 500 to the user coz some issue occurred
        return response()->json([
            "message" => "Some internal server error occurred"
        ], 500);
    }
}
