<?php


$name = "Arjun";
$rollno = 7;
$dateOfBirth = "2005-08-31";

echo "Problem 1<br>";

$reverseString = strrev($name);
if ($name === $reverseString) {
    echo "palindrome<br>";    
} else {
    echo "not palindrome.<br>";
}

echo "<br>Problem 2<br>";

$currentDate = date("Y-m-d");
$age = date_diff(date_create($dateOfBirth), date_create($currentDate))->y;
echo "Friend's age is " . $age . " years.<br>";

echo "<br>Problem 3<br>";

echo "Roll number to binary" . decbin($rollno) . "<br>";
echo "Roll number to hexadecimal " . dechex($rollno);
?>
