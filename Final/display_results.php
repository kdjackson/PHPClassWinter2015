<?php
//Kimberly Jackson
    // get the data from the form

    include './functions.php';
    
    $error_msgs = array();
    $sucess_msg = '';
    
    $email = '';
    $phone = '';
    $heard_from = '';
    $contact_via='';
    $comments = '';
    $checked = 'checked="checked"';
    $selected = 'selected="selected"';
  
    
    
    
    if ( !empty($_POST) ) {
        // collect the data
        $email = filter_input(INPUT_POST, 'email');
        $phone = filter_input(INPUT_POST, 'phone');
        $heard_from = filter_input(INPUT_POST, 'heard_from');
        $contact_via = filter_input(INPUT_POST, 'contact_via');
        $comments = filter_input(INPUT_POST, 'comments');
        
        $comments = htmlspecialchars($comments);       
        
    //Validate the data
        if ( !emailIsValid($email) ) {
            $error_msgs[] = 'Email is not Valid.';
        }
        
        if ( !phoneIsValid($phone) ) {
            $error_msgs[] = 'Phone Number is a required field';
        }
        
        if ( !heardFromIsValid($heard_from) ) {
            $error_msgs[] = 'Please select how you heard about us';
        }
        
     
       //If no errors add to database and display on results page 
        if (!empty ($error_msgs) ) {
            displayErrorMsgs($error_msgs);
            include './index.php';
            exit();
        }
        
        if ( count($error_msgs) === 0 ) {
            //add to database
            
            $addedInfo = addInfo($email, $phone, $heard_from, $contact_via, $comments);
            
            if ( $addedInfo == true  ) {
                $sucess_msg = 'Info added to database';
            } else {
                $error_msgs[] =   'Info was NOT added to the database';
            }
        }
    }  

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
                       
        <div class="error_message">
            <?php            
                displayErrorMsgs($error_msgs);            
            ?>
        </div>
        
        <div>
            <?php 
                displaySucessMsg($sucess_msg);
            ?>
        </div>
  
       <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?php echo htmlspecialchars($email); ?></span><br />
            
             <label>Phone:</label>
            <span><?php echo htmlspecialchars($phone); ?></span><br />

            <label>Heard From:</label>
            <span><?php echo $heard_from; ?></span><br />

            <label>Contact Via:</label>
            <span><?php echo $contact_via; ?></span><br /><br />

            <span>Comments:</span><br />
            <span><?php echo '<p>',($comments), '</p>'; ?></span><br />

        </div>
    </body>
</html>
