<?php
      if(isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $operator = $_POST['operator'];
        $num2 = $_POST['num2'];

        switch($operator) {
          case '+':
            $result = $num1 + $num2;
            break;
          case '-':
            $result = $num1 - $num2;
            break;
          case '*':
            $result = $num1 * $num2;
            break;
          case '/':
            $result = $num1 / $num2;
            break;
          default:
            $result = "Invalid operator selected.";
        }

        echo "<h3>Result:</h3>";
        echo "<p>$num1 $operator $num2 = $result</p>";
      }
    ?>