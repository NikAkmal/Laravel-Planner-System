<?php

use Illuminate\Support\Facades\Route;

//Go To Homepage
Route::get('/', function () {
    return view('home');
})->middleware('auth');

//Go To Insert Page
Route::get('/insert', function () {
    return view('insert');
})->middleware('auth');

//Go to Result Page
Route :: get('/result','App\Http\Controllers\PlannerController@resultView')->middleware('auth');

//Go to Planner Page
Route :: get('/planner','App\Http\Controllers\PlannerController@plannerView')->middleware('auth');

//Insert Schedule
Route :: post('/add/insertSchedules','App\Http\Controllers\PlannerController@insertSchedules')->middleware('auth');

//Insert Notes
Route :: post('/add/insertNotes','App\Http\Controllers\PlannerController@insertNotes')->middleware('auth');

//Insert Todolists
Route :: post('/add/insertLists','App\Http\Controllers\PlannerController@insertLists')->middleware('auth');

Auth::routes();

//Login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

//Delete Schedule
Route::get('/data/{schedules_id}/deleteSchedule','App\Http\Controllers\PlannerController@deleteSchedule')->middleware('auth');

//Delete Todolist
Route::get('/data/{list_id}/deleteLists','App\Http\Controllers\PlannerController@deleteLists')->middleware('auth');

//Delete Notes
Route::get('/data/{notes_id}/deleteNotes','App\Http\Controllers\PlannerController@deleteNotes')->middleware('auth');

//Edit Schedule
Route::get('/data/{schedules_id}/editSchedule','App\Http\Controllers\PlannerController@editSchedule')->middleware('auth');

//Edit Todolist
Route::get('/data/{list_id}/editList','App\Http\Controllers\PlannerController@editList')->middleware('auth');

//Edit Note
Route::get('/data/{notes_id}/editNote','App\Http\Controllers\PlannerController@editNote')->middleware('auth');

//Update Schedule
Route :: post('/data/{schedules_id}/updateSchedule','App\Http\Controllers\PlannerController@updateSchedule')->middleware('auth');

//Update Todolist
Route :: post('/data/{list_id}/updateList','App\Http\Controllers\PlannerController@updateList')->middleware('auth');

//Update Note
Route :: post('/data/{notes_id}/updateNote','App\Http\Controllers\PlannerController@updateNote')->middleware('auth');