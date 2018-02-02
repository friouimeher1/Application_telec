<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);
    $user=App\Client::all();
    $c=count($user);
    return view('admin.home',compact('c','user'));
})->name('home');
