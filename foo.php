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

// 外部ファイルを読み込む文として、include文の他にrequire文というものがあります。
// 両者とも外部ファイルを読み込み実行するところまでは同じですが、異なる点があります。
// それは、読み込むファイルがなかったりファイルの指定を間違えたりした場合に、
// include文は警告を出してそのままプログラムを実行しますが、
// require文はエラーを出力してプログラムが停止します。
// 重要なプログラムファイルが読み込めなかった場合、停止した方がいいのでrequire
// includeはhtmlファイルとかを読み込んでページの特定の位置に差し込むとき何かが良いね。