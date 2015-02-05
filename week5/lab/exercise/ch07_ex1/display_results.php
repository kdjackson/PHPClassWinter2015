<?php
    // get the data from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $heard_from = filter_input(INPUT_POST, 'heard_from');
    $wants_updates = filter_input(INPUT_POST, 'wants_updates');
    $contact_via = $_POST['contact_via'];
    $comments = $_POST['comments'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Account Information</h1>

        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br />

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br />

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br />

        <label>Heard From:</label>
        <span><?php 
        if ($heard_from) {
            echo $heard_from;
        }
        else{
            echo 'unknown';
        }
        ?></span><br />

        <label>Send Updates:</label>
        <span><?php
        if ($wants_updates =='on'){
            echo 'yes';
        }
        else {
            echo 'no';
        }
        ?></span><br />

        <label>Contact Via:</label>
        <span><?php echo $contact_via ?></span><br /><br />

        <span>Comments:</span><br />
        <span><?php echo '<p>',nl2br($comments), '</p>'; ?></span><br />
        
        <p>&nbsp;</p>
    </div>
</body>
</html>