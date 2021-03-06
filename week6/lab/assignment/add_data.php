<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ( !empty($_POST) ) {
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $error_message = '';
        
        
         //validate email
        if ( empty($email))  
         {
            $error_message .= '<p>Invalid Email. Please enter an Email.</p>'; 
         } 
                  
         //validate password
         if( empty($password))
         {
             $error_message .= '<p>Invalid Password. Please enter a Password.</p>';
         }
         //validate password length
         if ( strlen($password) < 4 )
         {  
             $error_message .= '<p>Password must be greater than 4 characters.<p>';
         }
        
         $password = sha1($password);
           
  
        if ( filter_var($email, FILTER_VALIDATE_EMAIL) != false ) {
                echo '<p>this email is valid</p>';
        } else {
                $error_message .= '<p>this email is <strong>NOT</strong> valid</p>';
            }
        
         if ($error_message != '') {
         include('index.php');
         exit();
         } 
         
         
        $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
  
        $dbs = $db->prepare('insert signup set email = :email, password = :password');  
    
        $dbs->bindParam(':password', $password, PDO::PARAM_STR);
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        
        // If valid, add signup to the database
        $query = "INSERT INTO signup
                 (email, password)
              VALUES
                 ('$email', '$password')";
        
        
        if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
            echo '<h1> Sign Up Successful</h1>';
        } else {
            echo '<h1> Sign Up <strong>NOT</strong> Successful</h1>';
        }
        
        include('index.php');
        }
        
        ?>
    </body>
</html>
