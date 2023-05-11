<?php
$rahulMoney = 1000;
$totalAmount = 0;
for ($i = 2; $i <= 50; $i++) {
  $isPrime = true;
  for ($j = 2; $j <= sqrt($i); $j++) {
    if ($i % $j == 0) {
      $isPrime = false;
      break;
    }
  }
  if ($isPrime) {
    $totalAmount += $i;
  }
}

echo "Rahul gave Rs. $totalAmount to Anjali to buy popcorn.";

?>
