<?php

declare(strict_types=1);

/**
 * PHPUnit bootstrap.
 *
 * - Loads composer autoload (vendor/ + tests/stubs/ + lib/).
 * - Defines `_T()` (Galette's translation marker) as an identity function so
 *   plugin classes that call _T() inside match arms don't crash under test.
 *   In production, Galette installs the real _T() globally.
 */

require_once __DIR__ . '/../vendor/autoload.php';

if (!function_exists('_T')) {
    function _T(string $msg, ?string $domain = null): string
    {
        return $msg;
    }
}
