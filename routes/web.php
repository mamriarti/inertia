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
