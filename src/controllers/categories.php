<?php
function liste($pdo){
    require_once '../src/models/CategoriesManager.php';
    $resultats = SelectAllCategories($pdo);
    include '../src/view/categories/list.php';
}
function add($pdo){
    require_once '../src/models/CategoriesManager.php';
    echo AddCategory($pdo);
    include '../src/view/categories/add.php';
}