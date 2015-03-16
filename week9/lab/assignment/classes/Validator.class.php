<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of validator
 *
 * @author 001348911
 */
class Validation {
    //put your code here
    
    public function loginIsValid ($email,$password) {
    
            $pdo = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
            $dbs = $pdo->prepare('select * from signup where email = :email and password = :password'); 
            
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
                
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    return true;
            } else {
                    return false;
            }
}

public function emailExists ($email) {
            $pdo = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
            $dbs = $pdo->prepare('select * from signup where email = :email'); 
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    return false;
            } else {
                    return true;
            }
}

public function emailRequired ($email) {
         if ( empty($email) || $email == null)  
         {
            return false;
         } 
         else {
             return true;
         }
                
}

public function emailValid ($email) {
     if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false ) {
                return false;
        } else {
               return true;
            }
}

public function passwordRequired ($password) {
             if( empty($password))
         {
             return false;
         } else {
             return true;
         }
}

public function passwordValid ($password) {
             if ( strlen($password) < 4 )
         {  
             return false;
         } else {
             return true;
         }
}
}
