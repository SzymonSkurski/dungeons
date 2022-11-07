<?php

namespace App\Http\Controllers;

use App\Tile;
use database\specifications\TileSpec;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Schema;
class TileController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param Tile $tile
     * @return JsonResponse
     */
    public function index(Tile $tile) : JsonResponse
    {
        return $this->outputJsonObject([$tile->getTable() => $tile::all()]);
    }

    /**
     * @param Tile $tile
     * @return JsonResponse
     */
    public function create(Tile $tile) : JsonResponse
    {
        $table = $tile->getTable();
        $columns = Schema::getColumnListing($table);
        var_dump(TileSpec::getValidate());
        return response()->json([$table => $columns]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        $tile = new Tile();
        $this->outputJsonObject([$tile->getTable() => $tile::find((int) $id)->getAttributes()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tile $tile
     * @return Response
     */
    public function edit(Tile $tile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Tile $tile
     * @return Response
     */
    public function update(Request $request, Tile $tile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tile $tile
     * @return Response
     */
    public function destroy(Tile $tile)
    {
        //
    }

    private function getPostedData() : array
    {
        return request()->validate(TileSpec::getValidate());
    }
}
