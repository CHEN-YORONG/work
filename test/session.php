<?php session_start();  //啟用session
if(! isset($_SESSION['num'])){
    $_SESSION['num']=1;
}else{
    $_SESSION['num']++;
}
$_SESSION['num'];
// unset($_SESSION['num']); 刪除某個session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $_SESSION['num']; ?>
</body>
</html>