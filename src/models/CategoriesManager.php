<?php
function SelectAllCategories($pdo){
    if(@$_GET['order'] == 'title-up') {
        $sql = "SELECT * FROM categories ORDER BY title";
    } elseif (@$_GET['order'] == 'title-down') {
        $sql = "SELECT * FROM categories ORDER BY title DESC";
    } elseif (@$_GET['order'] == 'description-up') {
        $sql = "SELECT * FROM categories ORDER BY description";
    } elseif (@$_GET['order'] == 'description-down') {
        $sql = "SELECT * FROM categories ORDER BY description DESC";
    } elseif (@$_GET['order'] == 'id-down') {
        $sql = "SELECT * FROM categories ORDER BY id DESC";
    } else {
        $sql = "SELECT * FROM categories";
    }
    return $pdo->query($sql)->fetchAll();
}
function AddCategory($pdo){
    if($_POST){
        $sql = "INSERT INTO categories (title,description,status) VALUES ('".$_POST['title']."', '".$_POST['description']."','".$_POST['status']."')";
        if ($pdo->exec($sql)) {
            header('Location: ?controllers=categories&method=list');
            exit();
        } else {
            echo 'Votre insertion a été un echec';
        }
    }
}