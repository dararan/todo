<?php
// 消すページ

// 読み込み
require_once('dbconnect.php');
require_once('function.php');
// なんかとってくるのか？何を消すかえらんでいるのかな
$id = $_POST['id'];

//DBからデータの削除実行
$stmt = $dbh->prepare('DELETE FROM tasks WHERE id = ?');
$stmt->execute([$id]);
//リダイレクト。結果の表示するために
header("location: index.php");