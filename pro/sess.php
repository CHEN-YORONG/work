<?php
//啟動SESSION 功能
session_start();


echo json_encode($_SESSION, JSON_UNESCAPED_UNICODE);
