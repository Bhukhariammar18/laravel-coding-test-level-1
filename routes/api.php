<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Event;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('events', function() {
        return Event::all();
    });

    Route::get('events/active-events', function() {

        $currentdatetime = Carbon::now();
        $data['active_events']= Event::where('startAt', '<=' ,$currentdatetime)
        ->where('endAt', '>=', $currentdatetime)
        ->get();

        return ($data);
    });

    Route::get('events/{id}', function($id) {
        return Event::find($id);
    });

    Route::post('events', function(Request $request) {
        return Event::create($request->all);
    });

    Route::put('events/{id}', function(Request $request, $id) {
        $training = Event::findOrFail($id);
        $training->update($request->all());

        return $training;
    });

    Route::patch('events/{id}', function(Request $request, $id) {
        $training = Event::findOrFail($id);
        $training->update($request->all());

        return $training;
    });

    Route::delete('events/{id}', function($id) {
        Event::find($id)->delete();

    return 204;
    });