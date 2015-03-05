<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        if ( !empty($_POST) ) {
            
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            
            $password = sha1($password);
            
            $pdo = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
            $dbs = $pdo->prepare('select * from signup where email = :email and password = :password'); 
            
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
                
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    echo '<h1> Login Successful </h1>';
            } else {
                    echo '<h1> Invalid Email or Password </h1>';
                    include ('login.php');
            }
            

        }
        ?>
    </body>
</html>
