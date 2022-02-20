<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
@@ -14,5 +15,10 @@
*/

Route::get('/', function () {
return Inertia::render('Home', [
    'name' => 'Aleksandra',
    'frameworks' => [
        'Laravel',
        'Vue',
        'Inertia'
    ]


]);
});
Route::get('/users',function (){
    sleep(2);
       return Inertia::render('Users');
    });
Route::get('/settings',function (){
    sleep(2);
        return Inertia::render('Settings');
    });

Route::post('/logout',function (){

    dd(request('foo'));

   // return Inertia::render('Logout');
});

