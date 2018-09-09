<?php

namespace App\Http\Controllers;

use App\Http\Resources\Occupant\OccupantResource;
use App\Model\Occupant;
use App\Model\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
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

    public function occupyTable(Request $request, Table $table) {
        if($this->isOccupied($table)) {
            return response()->json([
                'errors' => 'This table has been occupied'
            ],Response::HTTP_BAD_REQUEST);
        }

        $occupant = new Occupant();
        $occupant->table_id = $table->id;
        $occupant->user_id = Auth::id();
        $occupant->status = 1;
        $occupant->save();

        return response([
            'data' => new OccupantResource($occupant)
        ], Response::HTTP_CREATED);
    }

    private function isOccupied(Table $table) {
        $totalOccupant = Occupant::whereDate('created_at', Carbon::today())
            ->where(['table_id' => $table->id, 'status' => 1])->count();

        return $totalOccupant > 0 ? true : false;
    }
}
