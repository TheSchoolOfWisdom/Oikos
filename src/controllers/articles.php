<?php
function article($pdo){
    $folder = 'assets/images/articles/';
    require_once '../src/models/ArticlesManager.php';
    $resultats = SelectOneArticle($pdo);
    include '../src/view/articles/article.php';
}
function liste($pdo){
    require_once '../src/models/ArticlesManager.php';
    $resultats = SelectAllArticles($pdo);
    include '../src/view/articles/list.php';
}
function add($pdo){
    $folder = 'assets/images/articles/';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        copy($_FILES["image"]["tmp_name"], "$folder".$_FILES["image"]["name"]);
    }
    require_once '../src/models/ArticlesManager.php';
    echo AddArticle($pdo);
    include '../src/view/articles/add.php';
}
function edit($pdo){
    $folder = 'assets/images/articles/';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        copy($_FILES["image"]["tmp_name"], "$folder".$_FILES["image"]["name"]);
    }
    require_once '../src/models/ArticlesManager.php';
    $resultats = SelectOneArticle($pdo);
    echo EditArticle($pdo);
    include '../src/view/articles/edit.php';
}
function delete($pdo){
    require_once '../src/models/ArticlesManager.php';
    echo DeleteArticle($pdo);
}