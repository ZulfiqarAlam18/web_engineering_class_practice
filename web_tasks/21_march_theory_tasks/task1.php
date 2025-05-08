<?php
$time = date("H:i"); // Get current time in 24-hour format
$hour = date("H"); // Get current hour

if ($hour >= 6 && $hour < 12) {
    echo "Good morning!";
} elseif ($hour >= 12 && $hour < 17) {
    echo "Good afternoon!";
} elseif ($hour >= 17 && $hour < 21) {
    echo "Good evening!";
} elseif ($hour >= 21 || $hour < 6) {
    if ($hour >= 0 && $hour < 2) {
        echo "Late night!";
    } else {
        echo "Good night!";
    }
}
?>
