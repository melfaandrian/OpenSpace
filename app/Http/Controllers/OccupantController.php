<?php

namespace App\Http\Controllers;

use App\Http\Resources\Occupant\OccupantResource;
use App\Model\Occupant;
use App\Model\Table;
use Illuminate\Http\Request;

class OccupantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getListOccupantByTableId(Table $table) {
        return OccupantResource::collection($table->occupants);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Occupant  $occupant
     * @return \Illuminate\Http\Response
     */
    public function show(Occupant $occupant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Occupant  $occupant
     * @return \Illuminate\Http\Response
     */
    public function edit(Occupant $occupant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Occupant  $occupant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Occupant $occupant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Occupant  $occupant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Occupant $occupant)
    {
        //
    }
}
