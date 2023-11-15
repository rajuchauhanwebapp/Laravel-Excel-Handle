<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '127.0.0.1:9000/*',
        '127.0.0.1:8000/*',
        '127.0.0.1:8050/*',
        '127.0.0.1:7000/*',
    ];
}