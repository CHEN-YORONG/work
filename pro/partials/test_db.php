<?php

require __DIR__. '/init.php';

$stmt = $pdo->query("SELECT * FROM address_book LIMIT 10");



// print_r($stmt->fetch()); //fetch 拿一筆 fetchAll all
echo json_encode($stmt->fetchAll(),JSON_UNESCAPED_UNICODE); //JSON格式
?>