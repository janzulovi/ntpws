<?php

include("../../../model/note.php");
include("../../../apiUrl.php");

$note = new Note();

$note->id = $_POST['id'];
$note->title = $_POST['title'];
$note->description = $_POST['description'];
$note->createdBy = $_POST['createdBy'];
$note->createdOn = time();
$note->noteType = $_POST['noteType'];


$body = json_encode($note,JSON_UNESCAPED_UNICODE);

$options = [
    "http" => [
        "method" => "PUT",
        "header" => "Content-type: application/json; charset=UTF-8",
        "content" => $body
    ],
    "ssl"=> [
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ]
];

$putData = stream_context_create($options);

$data = file_get_contents($url."note/update", false, $putData);

header("Location: /ntpws/index.php?page=1");

?>