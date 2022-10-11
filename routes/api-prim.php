<?php

use Gdinko\Prim\Events\PrimHookEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::name('prim.')
    ->middleware(config('prim.middlewares'))
    ->prefix(config('prim.url_prefix'))
    ->group(function () {
        Route::middleware(config('prim.api_middleware'))
            ->post('/prim/hook', function (Request $request) {

                $status = 200;
                $payload = $request->all()['payload'] ?? json_encode([]);

                if (empty($payload)) {
                    $status = 404;
                }

                PrimHookEvent::dispatch($payload);

                return response()->json(
                    $payload,
                    $status
                );
            })
            ->name('hook');
    });
