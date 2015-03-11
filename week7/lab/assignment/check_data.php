<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include './functions.php';
        
        if ( !empty($_POST) ) {
            
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            $error_message = array();
            
                        
            if (count($error_message) == 0) {
                
                $password = sha1($password);
            }
            
            if (!loginIsValid($email, $password)) {
                $error_message [] = 'Invalid Email or Password';
                include ('login.php');
            } else {
                echo '<h1> Login Successful </h1>';
            }
            

        }
        ?>
    </body>
</html>
