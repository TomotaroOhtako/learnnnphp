<!DOCTYPE html>
<html>
<body>
<?php
  // データの受け取り
  $name = $_GET['name'];
  $height = $_GET['height'];
  $weight = $_GET['weight'];

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

  echo "<p>あなたのBMIは $bmi です</p>";
  echo "<p>肥満度は $category です</p>";
?>
</body>
</html>
