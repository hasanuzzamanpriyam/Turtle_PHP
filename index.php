<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Turtle Racing Game</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Turtle Racing Game</h1>
    <form action="race.php" method="POST">
        <label for="numTurtles">Number of Turtles:</label>
        <input type="number" id="numTurtles" name="numTurtles" min="2" max="10" required>
        <button type="submit">Start Race</button>
    </form>
    <?php
    if (isset($_GET['winner'])) {
        echo "<h2>The winner is Turtle #" . htmlspecialchars($_GET['winner']) . "!</h2>";
    }
    ?>
</body>
</html>
