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

        $category_name = $_POST['category_name'];

        // Delete the product from the database
        require_once('database.php');
        $query = "DELETE FROM categories
            WHERE categoryName = '$category_name'";
        $db->exec($query);

        // display the Product List page
        include('index.php');

        ?>

    </body>
</html>
