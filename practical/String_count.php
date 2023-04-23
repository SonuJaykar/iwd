<?php
    $s = $_POST["string"];
    echo "Given String is ' ".$s." '<br>";
    $c = 1;
    for ($i = 0;isset($s[$i]); $i++) {
        if ($s[$i] == " ") {
          $c++;
        }
    }
    echo "Word count is $c";
?>