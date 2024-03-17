<?php

require_once __DIR__ . '/../src/recursive/SumLinearRecursion.php';

use PHPUnit\Framework\TestCase;

class SumLinearRecursionTest extends TestCase
{
  public function testSumLinearRecursion()
  {
    $n = 5;
    $this->assertEquals(15, sumLinearRecursion(($n)));
  }
}
