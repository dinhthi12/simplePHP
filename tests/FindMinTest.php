<?php

require_once __DIR__ . '/../src/basic/FindMin.php';

use PHPUnit\Framework\TestCase;

class FindMinTest extends TestCase
{
    public function testEmptyArray()
    {
        $array = [];
        $this->assertNull(findMin($array));
    }

    public function testPositiveNumbers()
    {
        $array = [5, 3, 8, 2, 9, 1];
        $this->assertEquals(1, findMin($array));
    }

    public function testNegativeNumbers()
    {
        $array = [-5, -3, -8, -2, -9, -1];
        $this->assertEquals(-9, findMin($array));
    }

    public function testMixedNumbers()
    {
        $array = [-5, 3, -8, 2, -9, 1];
        $this->assertEquals(-9, findMin($array));
    }

    public function testDuplicateNumbers()
    {
        $array = [5, 3, 8, 2, 9, 1, 1];
        $this->assertEquals(1, findMin($array));
    }
}
