<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lab 1 Session</title>
</head>

<body>
    <div class="container">

        <h1>Read Session</h1>

        <?php
        if (isset($_SESSION['browser'])) {
            echo '<p>Here is the current version of your browser: ' . '<strong>' . $_SESSION['browser'] . '</strong>' . '</p>';
        }

        if (isset($_SESSION['role'])) {
            echo '<p>The role you\'ve been assign to: ' . '<strong>' . $_SESSION['role'] . '</strong>' . '</p>';
        }
        if (isset($_SESSION['views'])) {

            echo '<p>Here is the number of page views so far: ' . '<strong>' . $_SESSION['views'] . '</strong>' . '</p>';
        }
        ?>

        <p><a href="create_session.php">Create Session</a></p>
        <p><a href="destory_session.php">Destory Session</a></p>
        <p><a href="destory_all_session.php">Destory All Session</a></p>
    </div>
</body>

</html>