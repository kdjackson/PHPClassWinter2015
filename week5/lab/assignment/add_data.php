<?php
    $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
  
    $dbs = $db->prepare('insert signup set name = :name, email = :email');  
    
    $dbs->bindParam(':name', $name, PDO::PARAM_STR);
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    
   
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $error_message = '';
        
        
         //validate name
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
        
         if ($error_message != '') {
         include('index.php');
         exit();
        }
        
        // If valid, add signup to the database
        $query = "INSERT INTO signup
                 (email, password)
              VALUES
                 ('$email', '$password')";
        $db->exec($query);
        echo "Sign Up Successful";
  
        //Display the Sign Up Page
        include('index.php');
        
        
        
        ?>
    </body>
</html>
