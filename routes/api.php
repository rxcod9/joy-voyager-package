<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Voyager API Routes
|--------------------------------------------------------------------------
|
| This file is where you may override any of the routes that are included
| with ReplaceKeyword.
|
*/

Route::group(['as' => 'joy-replace-keyword.'], function () {
    // event(new Routing()); @deprecated

    $namespacePrefix = '\\' . config('joy-replace-keyword.controllers.namespace') . '\\';

    // event(new RoutingAfter()); @deprecated
});
