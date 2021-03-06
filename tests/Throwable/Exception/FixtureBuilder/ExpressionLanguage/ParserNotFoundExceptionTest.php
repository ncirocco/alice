<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nelmio\Alice\Throwable\Exception\FixtureBuilder\ExpressionLanguage;

use LogicException;
use Nelmio\Alice\Throwable\ExpressionLanguageParseThrowable;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Nelmio\Alice\Throwable\Exception\FixtureBuilder\ExpressionLanguage\ParserNotFoundException
 */
class ParserNotFoundExceptionTest extends TestCase
{
    public function testIsALogicException(): void
    {
        static::assertTrue(is_a(ParserNotFoundException::class, LogicException::class, true));
    }

    public function testIsNotAParseThrowable(): void
    {
        static::assertFalse(is_a(ParserNotFoundException::class, ExpressionLanguageParseThrowable::class, true));
    }

    public function testIsExtensible(): void
    {
        $exception = new ChildParserNotFoundException();
        static::assertInstanceOf(ChildParserNotFoundException::class, $exception);
    }
}
