<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [EventController::class, 'Index'])->name('Index');


Route::get('/list-events', [EventController::class, 'allEvents'])->name('allEvents');

Route::get('/create-event', [EventController::class, 'createEventPage'])->name('createEventPage');

Route::post('/create-event', [EventController::class, 'createEvent'])->name('createEvent');

Route::get('/update-event/{event}', [EventController::class, 'updateEventPage'])->name('updateEventPage');

Route::put('/update-event/{event}', [EventController::class, 'updateEvent'])->name('updateEvent');

Route::delete('/delete-event/{event}', [EventController::class, 'deleteEvent'])->name('deleteEvent');
