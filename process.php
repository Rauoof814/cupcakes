<?php
/*
  Author: Abdul Rahmani
  Date: 04/04/2024
  Description: This script processes the cupcake orders and calculates the total cost.
  GitHub URL: https://github.com/Rauoof814/cupcakes.git
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $flavors = $_POST['flavor'];
    $cost_per_cupcake = 3.50;
    $total_cost = count($flavors) * $cost_per_cupcake;

    echo "<h1>Thank you, $name, for your order!</h1>";
    echo "<h2>Order Summary:</h2>";
    echo "<ul>";
    foreach ($flavors as $flavor) {
        echo "<li>$flavor</li>";
    }
    echo "</ul>";
    echo "<h3>Order Total: $" . number_format($total_cost, 2) . "</h3>";
}

