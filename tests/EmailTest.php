<?php
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress()
    {
        $this->assertInstanceOf(
            'Email', //Email::class,
            Email::fromString('user@example.com')
        );
    }

    public function CannotBeCreatedFromInvalidEmailAddress()
    {
        $this->setExpectedException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }

    public function testCanBeUsedAsString()
    {
        $this->assertEquals(
            'user@example.com',
            Email::fromString('user@example.com')
        );
    }
}

// from: https://phpunit.de/getting-started/phpunit-4.html
