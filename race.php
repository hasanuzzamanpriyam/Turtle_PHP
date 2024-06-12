<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numTurtles = intval($_POST['numTurtles']);
    
    // Simulate the race
    $winner = rand(1, $numTurtles);

    // Redirect to index.php with the winner
    header("Location: index.php?winner=" . $winner);
    exit;
} else {
    // If accessed directly, redirect to index.php
    header("Location: index.php");
    exit;
}
