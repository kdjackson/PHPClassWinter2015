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
    $error_message = '';   
    
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $zip = $_POST['zip'];

    //validate name
     if ( empty($fullname))  
         {
         $error_message .= '<p>Invalid Name. Please enter a Name.</p>'; 
         } 
         
    //validate phone number
    if ( empty($phone) ||
            ! is_numeric ($phone))
        {
        $error_message.='<p>Invalid Phone Number. Please enter a valid Phone Number.</p>';
        }
        
    // validate email
    if (empty($email))
        {
        $error_message.='<p>Invalid Email. Please enter an email address.</p>';
        }
        
    //validate zip
    if (empty($zip) ||
            ! is_numeric ($zip))
        {
        $error_message.='<p>Invalid Zip. Please enter a valid Zip Code.</p>';
        }

    // if an error message exists, go to the index page
    if ($error_message != '') {
        include('index.php');
        exit();
    }
    

    // If valid, add the user to the database
   
    $query = "INSERT INTO users
                 (fullname, phone, email, zip)
              VALUES
                 ('$fullname', '$phone', '$email', '$zip')";
    $db->exec($query);
    echo "User Added";
  
    //Display the User List
    include('index.php');
    

    
    ?>
    </body>
</html>
