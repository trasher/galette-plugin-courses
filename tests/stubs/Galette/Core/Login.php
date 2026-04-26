<?php

declare(strict_types=1);

/**
 * Test-only stub for Galette\Core\Login.
 * `id` is declared as a public property so tests can assign it directly
 * on a PHPUnit double; the real Galette Login uses a magic accessor.
 */

namespace Galette\Core;

class Login
{
    public mixed $id = 0;

    public function isSuperAdmin(): bool
    {
        return false;
    }

    public function isAdmin(): bool
    {
        return false;
    }

    public function isStaff(): bool
    {
        return false;
    }

    public function isGroupManager(): bool
    {
        return false;
    }

    public function isUp2Date(): bool
    {
        return false;
    }

    /**
     * @return array<int>
     */
    public function getManagedGroups(): array
    {
        return [];
    }
}
