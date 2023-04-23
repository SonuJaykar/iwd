<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST["amount"];
    $note_count = minimum_notes($amount);
    echo "<h3>Minimum Notes:</h3>";
    echo "<ul>";
    foreach ($note_count as $denomination => $count) {
      if ($count > 0) {
        echo "<li>$count notes of Rs. $denomination</li>";
      }
    }
    echo "</ul>";
  }
  function minimum_notes($amount) {
    $denominations = array(100, 50, 20, 10, 5, 2, 1);
    $note_count = array();
    foreach ($denominations as $denomination) {
      $note_count[$denomination] = floor($amount / $denomination); 
      $amount %= $denomination; 
    }
    return $note_count;
  }
?>