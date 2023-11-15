<?php

include("apiUrl.php");
include("./model/user.php");

$data = file_get_contents($url."user/", true,  stream_context_create($context));
$decoded = json_decode($data);

$users = [];

foreach($decoded as $singleData){
    $user = new User();

    $user->username = $singleData->username;
    $user->firstName = $singleData->firstName;
    $user->lastName = $singleData->lastName;
    $user->email = $singleData->email;
    $user->password = $singleData->password;
    $user->dateOfBirth = $singleData->dateOfBirth;

    array_push($users, $user);
}
?>