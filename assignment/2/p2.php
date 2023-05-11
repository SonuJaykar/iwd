<?php

function CSI($principal, $years, $rate = 10)
{
    $interest = ($principal * $rate * $years) / 100;
    return $interest;
}

$DI = CSI(50000, 5);
echo "Simple Interest 10% rate: " . $DI . "<br>";
$DisI = CSI(50000, 5, 8);
echo "Simple Interest 8% rate : " . $DisI . "<br>";
?>
