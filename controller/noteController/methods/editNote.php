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

<form action="./controller/noteController/methods/updateNote.php" method="post" class="form-horizontal">
    <div class="container">
        <label for="title" class="control-label">Naslov</label>
        <input type="text" name="title" id="title" class="form-control" value="<?php echo $note->title; ?>">
    </div>
    <div class="container">
        <label for="description" class="control-label">Opis</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"><?php echo $note->description; ?></textarea>
    </div>
    <div class="container">
        <label for="noteType" class="control-label">Tip bilješke</label>
        <select name="noteType" id="noteType" class="form-control">
            <?php
            
            echo "
            <option value='Task' ".(($note->description=='Task')?"selected":"").">Task</option>
            <option value='Chore' ".(($note->description=='Chore')?"selected":"").">Chore</option>
            <option value='Emergency' ".(($note->description=='Emergency')?"selected":"").">Emergency</option>
            <option value='Business' ".(($note->description=='Business')?"selected":"").">Business</option>            
            ";
            
            ?>
        </select>
    </div>
    <div class="container" hidden>
        <label for="createdBy" class="control-label">Kreirao/la</label>
        <input type="text" name="createdBy" id="createdBy" class="form-control" value="<?php echo $note->createdBy; ?>">
    </div>
    <div class="container" hidden>
        <label for="id" class="control-label">Id</label>
        <input type="text" name="id" id="id" class="form-control" value="<?php echo $note->id; ?>">
    </div>
    <br>
    <div class="container">
        <button type="submit" class="btn btn-primary">Spremi</button>
    </div>
</form>