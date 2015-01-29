<?php
    $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
  
    $dbs = $db->prepare('insert demo set name = :name, email = :email');  
    
    $dbs->bindParam(':name', $name, PDO::PARAM_STR);
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    
   
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add User</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
    <body>
        <?php
    $fullname = '';
    $phone = '';
    $email = '';
    $zip = '';
    
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $zip = $_POST['zip'];
    $error_message = '';
    
     if ( empty($fullname) ||
             empty($phone) || 
             empty($email) || 
             empty ($zip)
         )  {
        echo "Invalid Entry. Check all fields and try again.";
    } 
    else {
    // If valid, add the user to the database
   
    $query = "INSERT INTO users
                 (fullname, phone, email, zip)
              VALUES
                 ('$fullname', '$phone', '$email', '$zip')";
    $db->exec($query);
    echo "User Added";
  
    
    }
    //Display the User List
    include('index.php');
    ?>
    </body>
</html>
