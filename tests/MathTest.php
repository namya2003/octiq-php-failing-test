<?php

declare(strict_types=1);

namespace Tests;

use App\Math;
use PHPUnit\Framework\TestCase;

final class MathTest extends TestCase
{
    public function testAdd(): void
    {
        self::assertSame(5, Math::add(2, 3));
    }

    public function testMultiply(): void
    {
        self::assertSame(6, Math::multiply(2, 3));
    }
}
