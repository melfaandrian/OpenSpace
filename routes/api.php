<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/tables','TableController');

Route::group(['prefix' => 'tables'.'/{table}'], function() {
    Route::get('/occupants', 'OccupantController@getListOccupantByTableId');
    Route::post('/occupants', 'OccupantController@occupyTable');
    Route::put('/occupants/{occupant}', 'OccupantController@releaseTable');
});