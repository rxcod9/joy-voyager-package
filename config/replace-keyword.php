<?php

return [

    /*
     * The config_key for replace-keyword package.
     */
    'config_key' => env('REPLACE_KEYWORD_CONFIG_KEY', 'joy-replace-keyword'),

    /*
     * The route_prefix for replace-keyword package.
     */
    'route_prefix' => env('REPLACE_KEYWORD_ROUTE_PREFIX', 'joy-replace-keyword'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\ReplaceKeyword\\Http\\Controllers',
    ],
];
