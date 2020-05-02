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
    <?php
    session_destroy();
    ?>
    <div class="container">

        <h1>Destory All Session</h1>
        <p><a href="create_session.php">Create Session</a></p>
        <p><a href="read_session.php">Read Session</a></p>
        <p><a href="destory_session.php">Destory Session</a></p>
    </div>
</body>

</html>