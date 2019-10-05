<?php

namespace App\Http\Controllers\Api;

use App\Resident;
use App\Society;
use App\Watchman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class ResidentRestController
 * @package App\Http\Controllers\Api
 * Manages all the operations for residents that will be used by the mobile device.
 */
class ResidentRestController extends Controller
{
    /**
     * Fetches all the residents for the given floors
     *
     * Throws a 404 error if no such resident is found.
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function all()
    {
        // Fecthing all the watchmen from the database
        $residents = Resident::all();

        // Returning the list of watchmen to the user with response code 200.
        return response()->json($residents, 200);
    }

    /**
     * Fetches all the residents for the given society
     *
     * Throws a 404 error if no such society is found.
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function allBySociety($id)
    {
        // Checking if any such building exists or not.
        Society::findOrFail($id);

        // Fetching all the floors with the given society id
        $residents = Resident::where("society_id", $id)
            ->get();

        // Verifying whether records are fetched or not
        if($residents) {
            // If Yes then returning the watchmen to the user with status code 200.
            return response()->json($residents, 200);
        }

        // Otherwise returning 500 to the user coz some issue occurred
        return response()->json([
            "message" => "Some internal server error occurred"
        ], 500);
    }
}
