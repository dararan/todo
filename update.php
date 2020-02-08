<?php
require_once('function.php');
require_once('dbconnect.php');

//データの受け取り
$title=$_POST['title'];
$contents=$_POST['contents'];
$id = $_POST['id'];

//DBデータ更新
$stmt=$dbh->prepare('UPDATE tasks SET title =?,contents = ? WHERE id =?');
$stmt->execute([$title,$contents,$id]);

//リダイレクト
header('location:index.php');