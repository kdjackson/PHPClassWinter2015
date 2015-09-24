<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include 'functions.php';
        include 'header.php';
        session_start();
        
        $_SESSION['loggedin'] = false;
        
        if ( !empty($_POST) ) {
            
            $username = filter_input(INPUT_POST, 'username');
            $password = filter_input(INPUT_POST, 'password');
            $error_message = array();
            
                        
            if (count($error_message) == 0) {
                
                $password = sha1($password);
            }
            
            if (loginIsValid($username, $password)) {
                echo '<h1> Login Successful </h1>';
                $_SESSION['loggedin'] = true;
                header('Location: ../index.php');
            }else {
                echo 'Invalid Username or Password';
                include ('index.php');
            } 
            

        }
        ?>
    </body>
</html>
