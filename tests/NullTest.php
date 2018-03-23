<?php
use PHPUnit\Framework\TestCase;

final class NullTest extends TestCase
{
    public function test()
    {
    }

    public function testAssert()
    {
        $this->assertEquals(
            'user@example.com',
            'user@example.com'
        );
    }
}
