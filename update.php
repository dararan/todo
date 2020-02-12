<!-- アップデートする更新したりとかするとこ -->

<?php
//読みこむ何かの対策
require_once('function.php');
require_once('dbconnect.php');

//データの受け取り。DBからもらうのか？
$title=$_POST['title'];
$contents=$_POST['contents'];
$id = $_POST['id'];

//DBデータ更新 書き換えてくれる３項目指定
$stmt=$dbh->prepare('UPDATE tasks SET title =?,contents = ? WHERE id =?');
$stmt->execute([$title,$contents,$id]);

//リダイレクト かけなおし
header('location:index.php');