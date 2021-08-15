<?php
//啟動SESSION 功能
session_start();

unset($_SESSION['user']); //移除

header('Location:index_.php')

// echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
?>