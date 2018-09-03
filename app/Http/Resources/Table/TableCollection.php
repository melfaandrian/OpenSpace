<?php

namespace App\Http\Resources\Table;

use Illuminate\Http\Resources\Json\Resource;

class TableCollection extends Resource {
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request) {
        return [
            'id' => $this->id,
            'description' => $this->description,
            'href' => [
                'link' => route('tables.show', $this->id)
            ]
        ];
    }
}
