 <?php session_start(); ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Lab 1 Session</title>
 </head>

 <body>
     <h1>Create Session</h1>
     <?php
        # These create session variables 
        if (!isset($_SESSION['views'])) {
            $_SESSION['views'] = 0;
        }

        if (!isset($_SESSION['browser'])) {
            $_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
        }

        if (!isset($_SESSION['role'])) {
            $_SESSION['role'] = 'admin';
        }

        $_SESSION['views'] = $_SESSION['views'] + 1;
        ?>

     <?php
        #Here are the variables that we echo out onto the webpage
        echo '<p>Here is the current version of your browser: ' .  $_SESSION['browser'] . '</p>';
        echo '<p>The role you\'ve been assign to: ' . $_SESSION['role'] . '</p>';
        echo '<p>Here is the number of page views so far: ' . $_SESSION['views'] . '</p>';
        ?>
     <p><a href="read_session.php">Read Session</a></p>
     <p><a href="destory_session.php">Destory Session</a></p>
     <p><a href="destory_all_session.php">Destory All Session</a></p>
 </body>

 </html>