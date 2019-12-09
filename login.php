<?php

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');
$_POST = json_decode(file_get_contents("php://input"), true);

$uname = $_POST['username'];
$pwd = $_POST['password'];



if (isset($uname) && isset($pwd)) {
    // based on successful authentication
    $successMSG = '<p>Login successful.</p>';
    echo json_encode(['code' => 1, 'msg' => $successMSG]);
} else {
    $errorMSG = '<p>Login not successful.</p>';
    echo json_encode(['code' => 404, 'msg' => $errorMSG]);
}
