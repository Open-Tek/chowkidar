<?php

namespace App\Http\Controllers\Api;

use App\Building;
use App\Floor;
use App\Flat;
use App\Http\Controllers\Controller;

/**
 * Class FlatRestController
 * @package App\Http\Controllers\Api
 * Manages all the operations for flats that will be used by the mobile device.
 */
class FlatRestController extends Controller
{
    /**
     * Fetches all the flats present in the database.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {
        // Fecthing all the flatsfrom the database
        $flats = Flat::all();

        // Returning the list of flats to the user with response code 200.
        return response()->json($flats, 200);
    }


    /**
     * Fetches all the flats for the given floors
     *
     * Throws a 404 error if no such floor is found.
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
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


    /**
     * Fetches all the flats for the given buildings
     *
     * Throws a 404 error if no such building is found.
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function allByBuilding($id)
    {
        // Checking if any such building exists or not.
        Building::findOrFail($id);

        // Fetching all the flats with the given building id.
        $flats = Flat::join("floors", "floors.id", "=", "flats.floor_id")
            ->where("floors.building_id", $id)
            ->get();

        // Verifying whether records are fetched or not
        if($flats) {
            return response()->json($flats,200);
        }

        // Otherwise returning 500 to the user coz some issue occurred
        return response()->json([
            "message" => 'Some internal server error occurred'
        ], 500);
    }
}
