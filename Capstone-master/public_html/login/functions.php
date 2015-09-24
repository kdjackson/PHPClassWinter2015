<?php

function loginIsValid ($username,$password) {
    
            $pdo = new PDO("mysql:host=localhost;dbname=the_doors; port=3307;", "root", "");
            $dbs = $pdo->prepare('select * from user_table where username = :username and password = :password'); 
            
            $dbs->bindParam(':username', $username, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
                
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    return true;
            } else {
                    return false;
            }
}

function usernameRequired ($username) {
         if ( empty($username) || $username == null)  
         {
            return false;
         } 
         else {
             return true;
         }
                
}

function passwordRequired ($password) {
             if( empty($password))
         {
             return false;
         } else {
             return true;
         }
}

function passwordValid ($password) {
             if ( strlen($password) < 4 )
         {  
             return false;
         } else {
             return true;
         }
}

?>


