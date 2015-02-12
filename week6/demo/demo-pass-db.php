<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $password = filter_input(INPUT_POST,'pass');
        
        // add validation
        
        $password = sha1($password);
        
        $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
        
        $dbs = $db->prepare('select * from signup where email = :email and pass'); 
            
        $dbs->bindParam(':pass', $pass, PDO::PARAM_STR);
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        
        if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
            echo '<h1> user was added</h1>';
        } else {
            echo '<h1> user <strong>NOT</strong> added</h1>';
        }
        
        ?>
    </body>
</html>
