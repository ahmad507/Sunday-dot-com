<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Today;
use App\Http\Resources\TodayTaskResource;
use App\Models\Upcoming;
use App\Http\Resources\UpcomingTaskResource;
use Illuminate\Support\Facades\DB;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/** ROUTE API UPCOMING */
/**================================*/
//GET ALL DATA
Route::get('/today', function(){
    $today = Today::all();
    return TodayTaskResource::collection($today);
});
//ADD NEW DATA
Route::post('/todaytask', function(Request $request){
    return Today::create([
        'title' => $request->title,
        'taskId' => $request->taskId,
    ]);
});
//DELETE DATA
Route::delete('/todaytask/{taskId}', function($taskId){
    DB::table('todays')->where('taskId',$taskId)->delete();
    return 204;
});


/**================================*/
//GET ALL DATA
Route::get('/upcoming', function(){
    $upcoming = Upcoming::all();
    return UpcomingTaskResource::collection($upcoming);
});
//ADD NEW DATA
Route::post('/upcoming', function(Request $request){
    return Upcoming::create([
        'title' => $request->title,
        'taskId' => $request->taskId,
        'waiting' => $request->waiting,
    ]);
});
//DELETE DATA
Route::delete('/upcoming/{taskId}', function($taskId){
    DB::table('upcomings')->where('taskId',$taskId)->delete();
    return 204;
});
/**================================*/