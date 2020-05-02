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
         <p><a href="read_session.php">Read Session</a></p>
         <p><a href="destory_session.php">Destory Session</a></p>
         <p><a href="destory_all_session.php">Destory All Session</a></p>
     </div>
 </body>

 </html>