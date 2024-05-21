<?php

use Controllers\Controller;

Route::get('/', [Controller::class, 'index']);

//    Ajax
Route::post('/yourURL', [Controller::class, 'action'])->name('yourURL');
