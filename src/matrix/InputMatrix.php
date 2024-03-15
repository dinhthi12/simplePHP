<?php

function inputMatrix(int $rows, int $cols): array{
  $matrix = [];
  for ($i = 0; $i <$rows; $i++) {
    $row = [];
    for($j = 0; $j < $cols; $j++){
      $row[] = readline("Enter element at position ($i, $j): ");
    }
    $matrix[] = $row;
  }
  return $matrix;
}

function outputMatrix(array $matrix): void {
  foreach ($matrix as $row) {
    foreach ($row as $element){
      echo $element . " ";
    }
    echo PHP_EOL;
  }
}

$rows = readline("Enter number of rows: ");
$cols = readline("Enter number of columns: ");

echo "Enter elements of the matrix:" . PHP_EOL;
$inputMatrix = inputMatrix($rows, $cols);

echo "Input Matrix:" . PHP_EOL;
outputMatrix($inputMatrix);
