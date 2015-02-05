<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $result = $db->query($query);
    return $result;
}

function get_category_name($category_id) {
    global $db;
    $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];
    return $category_name;
}
//Add Category
function add_category() {
    global $db;
    $query = "INSERT INTO categories
                 (categoryName)
              VALUES
                 ('$category_name')";
    $db->exec($query);
}
//Delete Category
function delete_category() {
    global $db;
    $query = "DELETE FROM categories
              WHERE categoryName = '$category_name'";
    $db->exec($query);
}
?>