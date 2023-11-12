<?php 

include("apiUrl.php");
include("./model/note.php");

$data = file_get_contents($url."note/".$id, true,  stream_context_create($context));
$decoded = json_decode($data);

$note = new Note();
                
$note->id = $decoded->id;
$note->title = $decoded->title;
$note->description = $decoded->description;
$note->createdBy = $decoded->createdBy;
$note->noteType = $decoded->noteType;

?>

<h1><?php echo $note->title; ?></h1>

<h5><?php echo $note->noteType; ?></h5>

<section><?php echo $note->description; ?></section>