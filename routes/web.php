<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
@@ -14,5 +15,10 @@
*/

Route::get('/', function () {
return inertia('Welcome');

});
