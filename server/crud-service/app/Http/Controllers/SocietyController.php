<?php

namespace App\Http\Controllers;

use App\Services\ViewService;
use App\Society;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SocietyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("society.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("society.create");
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
            "name" => "required|string|max:255|unique:societies,name"
        ]);

        $society = Society::create($validatedData);


        return redirect()->back()->with([
            "status" => "success",
            "title" => "Added a society",
            "message" => "Given society was added succesfully"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Society  $society
     * @return \Illuminate\Http\Response
     */
    public function show(Society $society)
    {
        return response()->json($society);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Society  $society
     * @return \Illuminate\Http\Response
     */
    public function edit(Society $society)
    {
        return view("society.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Society  $society
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Society $society)
    {
        $validatedData = $request->validate([
            "name" => "required|string|max:255|unique:society,name,".$society->id
        ]);

        $society->update($validatedData);

        return redirect()->back()->with([
            "status" => "success",
            "title" => "Updated the given society",
            "message" => "Given society was updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Society  $society
     * @return \Illuminate\Http\Response
     */
    public function destroy(Society $society)
    {
        $society->delete();
        return redirect()->back()->with([
            "status" => "success",
            "title" => "Deleted the given society",
            "message" => "Given society was deleted successfully"
        ]);
    }

    public function datatables()
    {
        $societies = Society::all();

        return DataTables::of($societies)
            ->addColumn('enroll', function ($society) {
                return ViewService::controlLinkButton('la la-plus-square', 'btn-success', $society->id, "/society/$society->id/enroll", "edit");
            })
            ->addColumn('edit', function ($society) {
                return ViewService::controlLinkButton('la la-pencil', 'btn-info', $society->id, "/society/$society->id/edit", "edit");
            })
            ->addColumn('delete', function ($society) {
                return ViewService::controlModalButton('la la-trash-o', 'btn-danger', $society->id, 'delete', 'deleteModal');
            })
            ->rawColumns(['edit', 'delete'])
            ->make(true);
    }
}
