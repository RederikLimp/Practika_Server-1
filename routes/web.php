<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add(['GET', 'POST'],'/job_tabel', [Controller\Site::class, 'job_tabel']) ->middleware('auth');
Route::add(['GET', 'POST'],'/job_tabel2', [Controller\Site::class, 'job_tabel2']) ->middleware('auth');
Route::add(['GET', 'POST'],'/job_tabel3', [Controller\Site::class, 'job_tabel3']) ->middleware('auth');
Route::add(['GET', 'POST'], '/employee_tabel', [Controller\Site::class, 'employee_tabel']) ->middleware('auth');


