<?php
//啟動SESSION 功能
session_start();


//可以登入的帳號
$users=[
    'shin' => [
        'pw' => '123456',
        'nickname' => '小明',
    ],
    'chen' => [
        'pw' => '654321',
        'nickname' => '小華',
    ],
];


//輸出的格式
$output=[
    'success'=>false,
    'error' => '',
    'code' => 0,
];
//$_POST['account']
//判斷帳號
if(! isset($users[$_POST['account']])){
    $output['error'] ='帳號錯誤';
    $output['code'] =401;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

//判斷密碼

$userData =$users[$_POST['account']];
if($_POST['password'] !== $userData['pw'] ){
    $output['error'] ='密碼錯誤';
    $output['code'] =402;
} else {
    $output['success'] ='true';
    $output['code'] =200;


    //存在SESSION裡
    $_SESSION['user'] = [   
        'account' => $_POST['account'],
        'nickname' => $userData['nickname']
    ];

}



echo json_encode($output, JSON_UNESCAPED_UNICODE);


?>
