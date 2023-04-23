<?php
$omAge = 25;
$jaiAge = 30;
$jagdishAge = 28;

if ($omAge > $jaiAge) {
  if ($omAge > $jagdishAge) {
    echo "Om will pay for the tickets.";
  } else {
    echo "Jagdish will pay for the tickets.";
  }
} else {
  if ($jaiAge > $jagdishAge) {
    echo "Jai will pay for the tickets.";
  } else {
    echo "Jagdish will pay for the tickets.";
  }
}
?>
