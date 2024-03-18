<?php

function findCombination(int $totalAmount, int $totalBill1000, int $totalBill2000, int $totalBill5000): array
{
  $combinations = [];

  for ($i = 0; $i <= $totalBill1000; $i++) {
    for ($j = 0; $j <= $totalBill2000; $j++) {
      for ($k = 0; $k <= $totalBill5000; $k++) {
        $currentAmount = $i * 1000 + $j * 2000 + $k * 5000;

        if ($currentAmount == $totalAmount) {
          $combinations[] = [$i, $j, $k];
        }
      }
    }
  }
  return $combinations;
}

$totalAmount = 20000; // Tổng số tiền cần có
$totalBill1000 = 20; // Số lượng giấy bạc 1000 đồng
$totalBill2000 = 20; // Số lượng giấy bạc 2000 đồng
$totalBill5000 = 20; // Số lượng giấy bạc 5000 đồng

$combinations = findCombination($totalAmount, $totalBill1000, $totalBill2000, $totalBill5000);

if (!empty($combinations)) {
  echo "Ways to achieve a total of $totalAmount VND using 3 types of banknotes:" . PHP_EOL;
  foreach ($combinations as $combination) {
    echo "- Quantity of 1000 VND banknotes: {$combination[0]}, 2000 VND banknotes: {$combination[1]}, 5000 VND banknotes: {$combination[2]}" . PHP_EOL;
  }
} else {
  echo "There is no way to achieve a total of $totalAmount VND using 3 types of banknotes." . PHP_EOL;
}
