<?php

use HeaderX\LegacyLoader\Http\Controllers\LegacyController;
use Illuminate\Support\Facades\Route;

Route::any(config('legacy-loader.route_prefix') . '/{path}', LegacyController::class)
    ->where('path', '(.*)')
    ->middleware(config('legacy-loader.middleware'));
