<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToastrController;

Route::get('/',[ToastrController::class,'toastNotification'])->name('toastr_notification');

Route::view('constant','constant');