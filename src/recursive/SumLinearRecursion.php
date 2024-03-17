<?php

function sumLinearRecursion(int $n): int
{
  if ($n === 1) {
    return 1;
  } else {
    return $n + sumLinearRecursion($n - 1);
  }
}
