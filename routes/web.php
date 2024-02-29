<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProjectController;

// Nell'url scrivo quello che va nella barra di ricerca

Route::get('/types', [TypeController::Class, 'index'])-> name('types.index');

Route::get('/projects', [ProjectController::Class, 'index'])-> name('projects.index');

// Create 

Route::get('/projects/create', [ProjectController::Class, 'create'])-> name('projects.create');



// Route :: get('/', [UserController :: class, 'index'])
//     -> name('user.index');
