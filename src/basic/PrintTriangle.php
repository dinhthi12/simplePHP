<?php

function printSolidIsoscelesTriangle($heigh)
{
  for ($i = 0; $i < count($heigh); $i++) {
    echo str_repeat('*', $i) . PHP_EOL;
  }
}

function printHollowIsoscelesTriangle($height)
{
  for ($i = 1; $i <= $height; $i++) {
    if ($i === 1 || $i === $height) {
      echo str_repeat('*', $i) . PHP_EOL;
    } else {
      echo '*' . str_repeat(' ', $i - 2) . '*' . PHP_EOL;
    }
  }
}

function printSolidRightTriangle($height)
{
  for ($i = 1; $i <= $height; $i++) {
    echo str_repeat('*', $i) . PHP_EOL;
  }
}

function printHollowRightTriangle($height)
{
  for ($i = 1; $i <= $height; $i++) {
    if ($i === 1 || $i === $height) {
      echo str_repeat('*', $i) . PHP_EOL;
    } else {
      echo '*' . str_repeat(' ', $i - 2) . '*' . PHP_EOL;
    }
  }
}
