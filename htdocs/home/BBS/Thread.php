<body>
    <?php
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
    // select
    $sql = "SELECT * FROM messages";
    $result = $pdo->query($sql);
    foreach ($result as $row) {
        //print('<p> $row["message"] </p>');
        print("</p>");
        print($row["message"]);
        print("</p>");
    }
    ?>
    <?php
    include "InputBox.php"
    ?>
</body>