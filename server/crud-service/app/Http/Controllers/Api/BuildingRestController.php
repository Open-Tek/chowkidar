<?php

namespace App\Http\Controllers\Api;

use App\Building;
use App\Society;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class BuildingRestController
 * @package App\Http\Controllers\Api
 * Manages all the operations for buildings that will be used by the mobile device.
 */
class BuildingRestController extends Controller
{
    /**
     * Fetches all the buildings present in the database.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {
        // Fecthing all the buildings from the database
        $buildings = Building::all();

        // Returning the list of buildings to the user with response code 200.
        return response()->json($buildings, 200);
    }

    /**
     * Fetches all the buildings for the given society
     *
     * Throws a 404 error if no such society is found.
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function allBySociety($id)
    {
        // Checking if any such society exists or not.
        Society::findOrFail($id);

        // Fetching all the buildings with the given society id
        $buildings = Building::where("society_id", $id)
            ->get();

        // Verifying whether records are fetched or not
        if($buildings) {

        }

        // Otherwise returning 500 to the user coz some issue occurred
        return response()->json([
            "message" => "Some internal server error occurred"
        ], 500);
    }

}
