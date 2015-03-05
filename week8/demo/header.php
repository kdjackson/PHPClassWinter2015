<a href="?logout=1">Logout</a>

<?php
        // put your code here

$logout = filter_input (INPUT_GET, 'logout');

if ($logout == 1) {
    $_SESSION['loggedin'] = false;

}

?>

