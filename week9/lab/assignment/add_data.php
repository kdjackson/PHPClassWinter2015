<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './functions.php';
        include './classes/Validator.class.php';
        
        
        if ( !empty($_POST) ) {
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $error_message = array();
        
        $validate = new Validation();
        
        if (!$validate->emailExists($email)) {
             $error_message[] = '<p>Email already Exists.</p>';
        }
        

        if (!$validate->emailRequired($email)) {
            $error_message[] = "<p>Invalid Email. Please enter an Email.</p>";
        }
                  
         //validate password

        if (!$validate->passwordRequired($password)) {
            $error_message[] = "<p>Invalid Password. Please enter a Password.</p>";
        }
        
        
         //validate password length
       
        if (!$validate->passwordValid($password)) {
            $error_message[] = "<p>Password must be great than 4 characters.</p>";
        }

         if (!$validate->emailValid($email)) {
             $error_message[] = "<p>This email is NOT valid</p>";
         }
         
      
        if (count ($error_message) >0) {
            include('index.php');
            exit();
         } 

         
        if (count($error_message) == 0) {
                 $password = sha1($password); 
            
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
        }
        
        ?>
    </body>
</html>
