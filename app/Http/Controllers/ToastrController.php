<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToastrController extends Controller
{
    public function toastNotification(){
        toastr()->success('Toastr Success Notification testing!');
        toastr()->error('Toastr Error Notification testing!');
        toastr()->info('Toastr Info Notification testing!');
        return view('welcome');
    }
}
