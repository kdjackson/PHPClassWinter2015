<?php
    
if ( isset($_SESSION['loggedin']) &&
        $_SESSION['loggedin'] === true ) {
   echo '<a href="?logout=1">Logout</a>';
}
else {
    echo '<a href="index.php">Sign Up</a><br />';
    echo '<a href="login.php">Login</a>';
}
    $logout = filter_input(INPUT_GET, 'logout');
   
    if ( $logout == 1 ) {
       $_SESSION['loggedin'] = false;
    }


?>
   