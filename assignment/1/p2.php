<?php
$statement1 = true; 
$statement2 = false; 

if ($statement1 && $statement2) {
  echo "Scenario 1: Both statements are true.<br>";
} else {
  echo "Scenario 1: At least one statement is false.<br>";
}

if ($statement1 || $statement2) {
  echo "Scenario 2: At least one statement is true.<br>";
} else {
  echo "Scenario 2: Both statements are false.<br>";
}

if ($statement1 && !$statement2) {
  echo "Scenario 3: Statement 1 is true and statement 2 is 
  false.<br>";
} else {
  echo "Scenario 3: Either statement 1 is false or statement 2 is true.<br>";
}
?>
