<?php

require __DIR__. '/init.php';

$stmt = $pdo->query("SELECT * FROM `order` LIMIT 10");






while($r = $stmt->fetch()){
    echo "<p>{$r['sid']} :{$r['name']}</p>";
}