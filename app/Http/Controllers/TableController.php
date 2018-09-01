<?php

namespace App\Http\Controllers;

use App\Http\Resources\Table\TableCollection;
use App\Http\Resources\Table\TableResource;
use App\Model\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TableCollection::collection(Table::paginate(10));
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
     * @param  \App\Model\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        return new TableResource($table);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        //
    }
}
