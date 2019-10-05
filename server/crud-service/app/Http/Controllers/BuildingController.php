<?php

namespace App\Http\Controllers;

use App\Building;
use App\Society;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("building.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $societies = Society::all();
        return view("building.create") ->with([
            "societies" => $societies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|string|max:255|unique:buildings,name",
            "society_id" => "required|integer|max:11|exists:societies,id"
        ]);
        $building = Building::create($validatedData);
        if($building==null){}
            return redirect()->back()->with([
                "status" => "success",
                "title" => "Added a Building",
                "message" => "Given building was added successfully"
            ]);
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function show(Building $building)
    {
        return response()->json($building);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function edit(Building $building)
    {
        return view("building.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $building)
    {
        $validatedData = $request->validate([
            "name" => "required|string|max:255|unique:society,name,".$building->id
        ]);

        $building->update($validatedData);

        return redirect()->back()->with([
            "status" => "success",
            "title" => "Updated the given Building",
            "message" => "Given Building was updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        $building->delete();
        return redirect()->back()->with([
            "status" => "success",
            "title" => "Deleted the given building",
            "message" => "Given building was deleted successfully"
        ]);
    }
    public function datatables()
    {
        $buildings = Building::all();

        return DataTables::of($buildings)
            ->addColumn('enroll', function ($building) {
                return ViewService::controlLinkButton('la la-plus-square', 'btn-success', $building->id, "/building/$building->id/enroll", "edit");
            })
            ->addColumn('edit', function ($building) {
                return ViewService::controlLinkButton('la la-pencil', 'btn-info', $building->id, "/building/$building->id/edit", "edit");
            })
            ->addColumn('delete', function ($building) {
                return ViewService::controlModalButton('la la-trash-o', 'btn-danger', $building->id, 'delete', 'deleteModal');
            })
            ->rawColumns(['edit', 'delete'])
            ->make(true);
    }
}
