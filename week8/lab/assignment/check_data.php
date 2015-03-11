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
        include './header.php';
        session_start();
        
        $_SESSION['loggedin'] = false;
        
        if ( !empty($_POST) ) {
            
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            $error_message = array();
            
                        
            if (count($error_message) == 0) {
                
                $password = sha1($password);
            }
            
            if (loginIsValid($email, $password)) {
                echo '<h1> Login Successful </h1>';
                $_SESSION['loggedin'] = true;
                header('Location: admin.php');
            }else {
                $error_message [] = 'Invalid Email or Password';
                include ('login.php');
            } 
            

        }
        ?>
    </body>
</html>
