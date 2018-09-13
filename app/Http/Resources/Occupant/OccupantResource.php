<?php

namespace App\Http\Resources\Occupant;

use Illuminate\Http\Resources\Json\Resource;

class OccupantResource extends Resource {

    public function toArray($request) {
        return [
            'id' => $this->id,
            'table_id' => $this->table_id,
            'user_id' => $this->user_id,
            'status' => $this->status,
            'date' => $this->created_at->format('d/m/Y')
        ];
    }
}