<?php

$message = $_GET["message"]; 
//echo $message;
//  DB接続
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=Bbs;charset=utf8',
        'root',
        'root'
    );
} catch (PDOException $e) {
    echo "エラー";
    print "接続エラー:{$e->getMessage()}";
}

// insert
$sql = 'insert into messages(message) values(:message)';
$stmt = $pdo->prepare($sql);
// 挿入する値を配列に格納する
$params = array(':message' => $message);
// 挿入する値が入った変数をexecuteにセットしてSQLを実行
$stmt->execute($params);
header("Location: http://localhost:8888/home/BBS/Bbs.php");
exit;
?>