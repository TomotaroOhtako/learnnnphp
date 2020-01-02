<!DOCTYPE html>
<html>
<body>
<?php
session_start();
//  DB接続
try {
  $pdo = new PDO('mysql:host=localhost;dbname=bmi_1;charset=utf8',
  'root', 'root');
} catch ( PDOException $e ) {
  print "接続エラー:{$e->getMessage()}";
}

// insert
$sql = 'insert into users (name, height, weight)values(?, ?, ?)';
$stmt = $pdo->prepare($sql);
echo $sql;
$flag = $stmt->execute(array($_SESSION['name'], $_SESSION['height'], $_SESSION['weight']));
?>
<a href="http://localhost:8888/home/hello.php">ホームに戻る</a>
<body>
</html>
