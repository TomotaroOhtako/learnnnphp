<!DOCTYPE html>
<html>
<body>
<?php
  //セッションスタート（必ずphpファイルの先頭に書く）
  session_start();
  // データの受け取り
  $name = $_GET['name'];
  $height = $_GET['height'];
  $weight = $_GET['weight'];
  // 結果をセッションにぶち込む
  $_SESSION['name'] = $name;
  $_SESSION['height'] = $height;
  $_SESSION['weight'] = $weight;

  // 肥満指数（BMI）＝　体重 kg ÷ (身長 m ×身長 m）
  $height = $height * 0.01;
  $bmi = $weight / ($height * $height);
  $bmi = round($bmi, 1);

  // 肥満度を判定
  if($bmi >= 26.5){
    $category = "太りすぎ";
  } elseif ($bmi >= 24.0 && $bmi < 26.5){
    $category = "太り気味";
  } elseif ($bmi >= 20.0 && $bmi < 24){
    $category = "普通";
  } elseif ($bmi >= 17.7 && $bmi < 20){
    $category = "痩せ気味";
  } elseif ($bmi <= 17.6){
    $category = "痩せすぎ";
  }

  // View
  include('ShowResult.php');

?>
<a href="http://localhost:8888/home/SaveResult.php">結果を保存する</a>
<a href="http://localhost:8888/home/hello.php">ホームに戻る</a>
<body>
</html>
</body>
</html>
