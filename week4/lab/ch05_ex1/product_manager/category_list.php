<?php include '../view/header.php';
require('../model/category_db.php');?>


<div id="main">

    <h1 class="top">Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
    </table>
    <br />

    <h2>Add Category</h2>
    <form action ="add_category.php" method = "post" id = "add_category_form">
        <label>Category Name:</label>
        <input type="input" name="category_name" />
        
        <th>&nbsp;</th>
        <input type="submit" value="Add"></input>
    </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</div>
<?php include '../view/footer.php'; ?>