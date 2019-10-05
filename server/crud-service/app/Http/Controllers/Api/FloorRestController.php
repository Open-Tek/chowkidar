<?php

namespace App\Http\Controllers\Api;

use App\Building;
use App\Floor;
use App\Society;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class FloorRestController extends Controller
{
    public function all()
    {
        // Fecthing all the floors from the database
        $floors = Floor::all();

        // Returning the list of floors to the user with response code 200.
        return response()->json($floors, 200);
    }

    public function allByBuilding($id)
    {
        // Checking if any such building exists or not.
        Building::findOrFail($id);

        // Fetching all the floors with the given society id
        $floors = Floor::where("society_id", $id)
            ->get();

        // Verifying whether records are fetched or not
        if($floors) {
            // If Yes then returning the floors to the user with status code 200.
            return response()->json($floors, 200);
        }

        // Otherwise returning 500 to the user coz some issue occurred
        return response()->json([
            "message" => "Some internal server error occurred"
        ], 500);
    }
}
