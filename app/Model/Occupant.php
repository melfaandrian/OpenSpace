<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Occupant extends Model {

    protected $fillable = [
        'status'
    ];

    public function table() {
        return $this->belongsTo(Table::class);
    }
}
