<?php
//create.phpに打った内容の保存したい？
//データの取得 一回取得しないと保存できない？
require_once('dbconnect.php');
require_once('function.php');



// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
//     header('Location: index.php');
// }
//create.phpに打った内容をお呼びする
$title = $_POST['title'];
$contents = $_POST['contents'];
$currentTime = date("Y/m/d H:i:s");

//DBに保存したい
$stmt = $dbh->prepare('INSERT INTO tasks (title, contents, created) VALUES (?, ?, ?)');
    $stmt->execute([$title, $contents, $currentTime]);



//一覧にリダイレクト？
header('location:index.php');
?>

