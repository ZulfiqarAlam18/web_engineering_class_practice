<?php
$age = 65; // Example input
$club_member = true; // Example input

if ($age >= 60 && $club_member) {
    echo "You are eligible for a 25% discount.";
} elseif ($age >= 60 && !$club_member) {
    echo "You are eligible for a 15% discount.";
} elseif ($age < 60 && $club_member) {
    echo "You are eligible for a 5% discount.";
} else {
    echo "You are not eligible for a discount.";
}
?>
