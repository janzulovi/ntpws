<?php

session_start();
include("../../../model/note.php");
include("../../../apiUrl.php");

$note = new Note();

$note->title = $_POST['title'];
$note->description = $_POST['description'];
$note->createdBy = "test";
$note->createdOn = time();
$note->noteType = $_POST['noteType'];
$note->dueDate = $_POST['dueDate'];
$note->status = "Kreiran";


$body = json_encode($note,JSON_UNESCAPED_UNICODE);

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

$data = file_get_contents($url."note/new", false, $postData);

header("Location: /ntpws/index.php?page=1");

?>