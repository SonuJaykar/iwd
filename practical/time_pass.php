<?php
    // for ($i=1; $i <= 5; $i++) { 
    //     for ($j=5; $j >= $i; $j--) { 
    //         echo "-";
    //     }
    //     for ($l=1; $l <= $i; $l++) { 
    //         echo "* ";
    //     }
    //     echo "<br>";    
    // }

    for ($i=1; $i <=5 ; $i++) { 
    $q = 1;
    $z = 0;
        for ($j=1; $j <= $i; $j++) { 
            if ($i%2 == 0){
                // echo 2;
                if ($z == 0){
                    echo 0;
                }
                else{
                    echo 1;
                }
                $z = $z == 0 ? 1 : 0 ;   
            }
            else{
                // echo 0; 
                if ($q == 1){
                    echo 1;
                }
                else{
                    echo 0;
                }
                $q = $q == 1 ? 0 : 1 ;
            }
        }
        echo "<br>";
    }

?>

<!-- 
1
01
101
0101
10101 
-->