<?php

include("apiUrl.php");

$options = [
    "http" => [
        "method" => "DELETE",
        "header" => "Content-type: application/json; charset=UTF-8",
        "content" => $id
    ],
    "ssl"=> [
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ]
];


$deleteData = stream_context_create($options);

$data = file_get_contents($url."note/".$id, false, $deleteData);

header("Location: /ntpws/index.php?page=1");
?>