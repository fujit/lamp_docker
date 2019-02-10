<meta charset="UTF-8">
<title>テスト</title>
<?php

    try {
        $dsn = "mysql:host=mysql;dbname=test;";
        $db = new PDO($dsn, 'root', 'pass');

        $sql = "SELECT * FROM test";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        var_dump($result);
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }

    echo '接続成功!';

