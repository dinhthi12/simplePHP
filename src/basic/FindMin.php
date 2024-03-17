<?php
function findMin($array)
{
  if (empty($array)) {
    return null;
  }
  return min($array);
}
