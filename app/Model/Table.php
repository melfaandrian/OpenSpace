<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Table extends Model {

    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $fillable = [
            'description'
        ];
}
