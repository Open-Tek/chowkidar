<?php

namespace App\Http\Controllers\Api;

use App\Building;
use App\Floor;
use App\Society;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


/**
 * Class FloorRestController
 * @package App\Http\Controllers\Api
 * Manages all the operations for floors that will be used by the mobile device.
 */
class FloorRestController extends Controller
{
    /**
     * Fetches all the floors present in the database.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {
        // Fecthing all the floors from the database
        $floors = Floor::all();

        // Returning the list of floors to the user with response code 200.
        return response()->json($floors, 200);
    }

    /**
     * Fetches all the floors for the given buildings
     *
     * Throws a 404 error if no such building is found.
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
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
