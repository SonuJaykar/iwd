<?php

$arr = array(
    'sonu' => array(12, 14),
    'divyan' => array(15, 13),
    'sita' => array(18, 20),
    'ram' => array(16, 15),
    'gita' => array(17, 19),
    'shyam' => array(14, 17),
    'krishna' => array(19, 16),
    'arjun' => array(13, 12),
    'radha' => array(20, 18),
    'mohan' => array(11, 10));

echo "problem 1<br>";

$maxMarks = 0;

foreach ($arr as $student => $marks) {
    if ($marks[0] > $maxMarks) {
        $maxMarks = $marks[0];
        $maxMarksStudent = $student;
    }
}

echo "maximum marks in mid exam 1. name is " . $maxMarksStudent . "<br>";

echo "<br>problem 2<br>";

foreach ($arr as $student => $marks) {
    $averageMarks = ($marks[0] + $marks[1]) / 2;
    echo "Average marks for $student: " . $averageMarks . "<br>";
}
?>
