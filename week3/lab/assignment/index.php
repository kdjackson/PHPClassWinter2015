<?php
    $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3307;", "root", "");
  
    $dbs = $db->prepare('insert users set name = :name, email = :email');  
    
    $dbs->bindParam(':name', $name, PDO::PARAM_STR);
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    
   
?>

<?php
    // Get all users
    $query = 'SELECT * FROM users
              ORDER BY id';
    $users = $db->query($query);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Users</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>
    <body>
        
    <?php  
    $fullname = '';
    $phone = '';
    $email = '';
    $zip = '';
     ?>
        
   
    <div id="main">

    <h1>User List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Zip Code</th>
        </tr>
        <?php foreach ($users as $user) : ?>
        <tr>
        <td><?php echo $user['id']; ?></td>
        <td><?php echo $user['fullname']; ?></td>
        <td><?php echo $user['phone']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo $user['zip']; ?></td>
        
     
        <?php endforeach; ?>
        
        
    
    </table>
    <br />
   <h2>Add User</h2>
    <form action ="add_user.php" method = "post" id = "add_user_form">
        <label>Name:</label>
        <input type="input" name="fullname" />
        <label>Phone Number:</label>
        <input type="input" name="phone" />
        <label>Email:</label>
        <input type="input" name="email" />
        <label>Zip Code:</label>
        <input type="input" name="zip" />
        
        <th>&nbsp;</th>
        <input type="submit" value="Add"></input>
    </form>

    <?php if (!empty($error_message)) { ?>
    <?php echo $error_message;?>
    <?php } // end if ?>

    <br />


    </div> <!-- end main -->
    </body>
</html>
