<?php

$matrix1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$matrix2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);

$result = array(
    array(0, 0, 0),
    array(0, 0, 0),
    array(0, 0, 0)
);

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        for ($k = 0; $k < 3; $k++) {
            $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
        }
    }
}
echo "Matrix 1 :<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrix1[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br><br>Matrix 2 :<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrix2[$i][$j] . " ";
    }
    echo "<br>";
}
echo "<br><br>Result :<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $result[$i][$j] . " ";
    }
    echo "<br>";
}
?>