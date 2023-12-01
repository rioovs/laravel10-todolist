<?php

use Illuminate\Http\Response;
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

Route::get('/', function () {
  return redirect()->route('tasks.index');
});

Route::get('/tasks', function ()  {
    return view('index', [
      'tasks' => \App\Models\Task::latest()->get()
      ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
    return view('show', [
      'task' => \App\Models\Task::findOrFail($id)
    ]);
})->name('tasks.show');



// Route::get('/hello', function () {
//     return 'Hello';
// })->name('hello');

// Route::get('/hallo', function () {
//     return redirect ()->route('hello');
// });

// Route::get('/hello/{name}', function ($name) {
//     return 'Helo '. $name;
// });

Route::fallback(function () {
    return 'Still got somewere';
});