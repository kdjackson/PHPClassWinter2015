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
        
        
        if( !empty($_POST)) {
            
            $userPass = filter_input(INPUT_POST, 'pass');
            $userPassHash = sha1($userPass);
            $passcode = sha1('password');

            $error_message = '';
            
            if($passcode == $userPassHash)
         {
             echo '<p>Passcode accepted</p>';
         } else {
             echo '<p>Passcode not accepted</p>';
         }
        } //end if empty statement
        ?>
        
        <form action = "#" method = "post">
            
            Passcode: <input type="password" name="pass" value="" />
            
            <input type="submit" value="submit" />
            
            
        </form>
        
    </body>
</html>
