<?php

include("../../../model/user.php");
include("../../../apiUrl.php");

$user = new User();

$user->firstName = $_POST['firstName'];
$user->lastName = $_POST['lastName'];
$user->username = $_POST['username'];
$user->password = $_POST['password'];
$user->email = $_POST['email'];
$user->dateOfBirth = $_POST['dateOfBirth'];


$body = json_encode($user,JSON_UNESCAPED_UNICODE);

$options = [
    "http" => [
        "method" => "POST",
        "header" => "Content-type: application/json; charset=UTF-8",
        "content" => $body
    ],
    "ssl"=> [
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ]
];

$postData = stream_context_create($options);

$data = file_get_contents($url."user/new", false, $postData);

header("Location: /ntpws/index.php?page=1");
?>