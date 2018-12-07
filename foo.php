<?php
$db = new PDO('mysql:host=localhost;dbname=testdb;charset=utf8mb4', 'username', 'password');

// モデルを読み込む
include 'models/FooModel.php';

// インスタンスを作る
$fooModel = new FooModel($db);
// Fooのリストを作る
$fooList = $fooModel->getAllFoos();

// ビューを表示する
include 'views/foo-list.php';