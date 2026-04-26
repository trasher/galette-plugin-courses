<?php

declare(strict_types=1);

/**
 * Test-only stub for Analog\Analog (the logger Galette uses).
 * Swallows log calls so production code's catch blocks don't blow up under test.
 */

namespace Analog;

class Analog
{
    public const URGENT = 0;
    public const ALERT = 1;
    public const CRITICAL = 2;
    public const ERROR = 3;
    public const WARNING = 4;
    public const NOTICE = 5;
    public const INFO = 6;
    public const DEBUG = 7;

    public static function log(mixed $message, int $level = self::DEBUG): void
    {
    }
}
