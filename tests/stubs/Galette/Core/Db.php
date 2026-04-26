<?php

declare(strict_types=1);

/**
 * Test-only stub for Galette\Core\Db.
 * Loaded via composer autoload-dev — never reachable in production runtime,
 * where the real Galette core class is autoloaded instead.
 *
 * Methods are intentionally untyped/no-op so PHPUnit::createMock() can
 * generate a working double without instantiating the real Laminas-backed Db.
 */

namespace Galette\Core;

class Db
{
    public mixed $connection = null;

    public function select(string $table)
    {
        return new \stdClass();
    }

    public function insert(string $table)
    {
        return new \stdClass();
    }

    public function update(string $table)
    {
        return new \stdClass();
    }

    public function delete(string $table)
    {
        return new \stdClass();
    }

    public function execute(mixed $query)
    {
        return new \ArrayIterator([]);
    }

    public function getLastGeneratedValue(mixed $obj): int
    {
        return 0;
    }
}
