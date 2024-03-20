<?php

require_once __DIR__ . '/../src/basic/PrintTriangle.php';

use PHPUnit\Framework\TestCase;

class PrintTriangleTest extends TestCase
{
  public function testPrintSolidIsoscelesTriangle()
  {
    ob_start();
    printSolidIsoscelesTriangle(5);
    $output = ob_get_clean();
    $expected = "*
      **
      ***
      ****
      *****\n";
    $this->expectOutputString($expected);
    $this->assertEquals($expected, $output);
  }

  public function testPrintHollowIsoscelesTriangle()
  {
    ob_start();
    printHollowIsoscelesTriangle(5);
    $output = ob_get_clean();
    $expected = "*\n" .
      "**\n" .
      "* *\n" .
      "*  *\n" .
      "*****\n";
    $this->expectOutputString($expected);
    $this->assertEquals($expected, $output);
  }

  public function testPrintSolidRightTriangle()
  {
    ob_start();
    printSolidRightTriangle(5);
    $output = ob_get_clean();
    $expected = "*\n" .
      "**\n" .
      "***\n" .
      "****\n" .
      "*****\n";
    $this->expectOutputString($expected);
    $this->assertEquals($expected, $output);
  }

  public function testPrintHollowRightTriangle()
  {
    ob_start();
    printHollowRightTriangle(5);
    $output = ob_get_clean();
    $expected = "*\n" .
      "**\n" .
      "* *\n" .
      "*  *\n" .
      "*****\n";
    $this->expectOutputString($expected);
    $this->assertEquals($expected, $output);
  }
}
