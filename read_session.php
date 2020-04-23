<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1 Session</title>
</head>

<body>
    <h1>Read Session</h1>

    <?php
    echo '<p>Current version of your browser: ' .  $_SESSION['browser'] . '</p>';
    echo '<p>Your role: ' . $_SESSION['role'] . '</p>';
    echo '<p>Number of page views so far: ' . $_SESSION['views'] . '</p>';
    ?>

    <p><a href="create_session.php">Create Session</a></p>
    <p><a href="destory_session.php">Destory Session</a></p>
    <p><a href="destory_all_session.php">Destory All Session</a></p>

</body>

</html>