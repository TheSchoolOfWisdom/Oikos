<?php
function SelectOneArticle($pdo){
    $sql = "SELECT * FROM articles WHERE id=".$_GET['id'];
    return $pdo->query($sql)->fetchAll();
}
function SelectAllArticles($pdo){
    if(@$_GET['order'] == 'title-up') {
        $sql = "SELECT * FROM articles ORDER BY title";
    } elseif (@$_GET['order'] == 'title-down') {
        $sql = "SELECT * FROM articles ORDER BY title DESC";
    } elseif (@$_GET['order'] == 'description-up') {
        $sql = "SELECT * FROM articles ORDER BY description";
    } elseif (@$_GET['order'] == 'description-down') {
        $sql = "SELECT * FROM articles ORDER BY description DESC";
    } elseif (@$_GET['order'] == 'created-up') {
        $sql = "SELECT * FROM articles ORDER BY created";
    } elseif (@$_GET['order'] == 'created-down') {
        $sql = "SELECT * FROM articles ORDER BY created DESC";
    } elseif (@$_GET['order'] == 'id-down') {
        $sql = "SELECT * FROM articles ORDER BY id DESC";
    } else {
        $sql = "SELECT * FROM articles";
    }
    return $pdo->query($sql)->fetchAll();
}
function AddArticle($pdo){
    if($_POST){
        $sql = "INSERT INTO articles (title,description,content,image,created) VALUES ('".$_POST['title']."', '".$_POST['description']."', '".$_POST['content']."', '".$_FILES["image"]["name"]."','".$_POST['created']."')";
        if ($pdo->exec($sql)) {
            header('Location: ?controllers=articles&method=list');
            exit();
        } else {
            echo 'Votre insertion a été un echec';
        }
    }
}
function EditArticle($pdo){
    if($_POST){
        $sql = "UPDATE articles SET title = '".$_POST['title']."', description = '".$_POST['description']."', content = '".$_POST['content']."', image = '".$_FILES["image"]["name"]."', created = '".$_POST['created']."' WHERE id= '".$_GET['id']."' ";
        if ($pdo->exec($sql)) {
            header('Location: ?controllers=articles&method=list');
            exit();
        } else {
            echo 'Votre insertion a été un echec';
        }
    }
}
function DeleteArticle($pdo){
    if(@$_GET['id']<>''){
        $sql = "DELETE FROM articles WHERE id=".$_GET['id'];
        if ($pdo->exec($sql)) {
            header('Location: ?controllers=articles&method=list');
            exit();
        } else {
            echo '<h3>Votre suppresion a été un echec</h3><br>';
        }
    }
}