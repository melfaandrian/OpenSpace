<?php

namespace App\Http\Controllers;

use App\Http\Resources\Occupant\OccupantResource;
use App\Model\Occupant;
use App\Model\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class OccupantController extends Controller
{

    public function __construct() {
        $this->middleware('auth:api');
    }

    public function getListOccupantByTableId(Table $table) {
        return OccupantResource::collection($table->occupants);
    }

    public function occupyTable(Table $table, Request $request) {
        $occupant = new Occupant();
        $occupant->table_id = $table->id;
        $occupant->user_id = Auth::id();
        $occupant->status = 1;
        $occupant->save();

        return response([
            'data' => new OccupantResource($occupant)
        ], Response::HTTP_CREATED);
    }
}
