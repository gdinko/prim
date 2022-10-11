<?php

return [

    'api_token' => env('PRIM_API_TOKEN'),

    'base_url' => rtrim(env('PRIM_API_BASE_URL'), '/'),

    'timeout' => env('PRIM_API_TIMEOUT', 30),

    'enable_request_log' => env('PRIM_ENABLE_REQUEST_LOG', false),

    'enable_error_log' => env('PRIM_ENABLE_ERROR_LOG', true),

    'url_prefix' => 'api',

    // The middleware(s) to apply before attempting to access hook url
    'middlewares' => [],

    // The middleware(s) to apply before attempting to access API route.
    'api_middleware' => 'auth:sanctum',
];
