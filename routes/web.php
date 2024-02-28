<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProjectController;


// Route::get('/', [TypeController::Class, 'index'])-> name('pages.type.index');


Route::get('/', [ProjectController::Class, 'index'])-> name('pages.projects.index');

// Route :: get('/', [UserController :: class, 'index'])
//     -> name('user.index');
