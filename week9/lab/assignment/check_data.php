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
        include './classes/Validator.class.php';
        session_start();
        
        $_SESSION['loggedin'] = false;
        
        $validate = new Validation();
        
        if ( !empty($_POST) ) {
            
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            $error_message = array();
            
                        
            if (count($error_message) == 0) {
                
                $password = sha1($password);
            }
            
            if ($validate->loginIsValid($email, $password)) {
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
