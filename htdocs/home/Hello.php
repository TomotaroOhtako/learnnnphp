<!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <title>BMI計算</title>
  </head>
  <body>
  <h2>名前・身長・体重を入力してください</h2>
  <form action="/home/Calculate.php" method="get">
    <div>
      <label for="name">名前:</label>
      <input type="text" id="name" name="name">
    </div>
    <div>
      <label for="height">身長:</label>
      <input type="number" id="height" name="height">
    </div>
    <div>
      <label for="weight">体重:</label>
      <input type="number" id="weight" name="weight">
    </div>
    <div class="button">
      <button type="submit">計算</button>
    </div>
  </form>
  <body>
  </html>
