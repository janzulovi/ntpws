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
$note->createdOn = $decoded->createdOn;
$note->status = $decoded->status;
$note->dueDate = $decoded->dueDate;

print '
<form action="./controller/noteController/methods/updateNote.php" method="POST" class="form-horizontal">
    <div class="container">
        <label for="title" class="control-label">Naslov</label>
        <input type="text" name="title" id="title" class="form-control" value="'.$note->title.'">
    </div>
    <div class="container">
        <label for="description" class="control-label">Opis</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control">'.$note->description.'</textarea>
    </div>
    <div class="container">
        <label for="noteType" class="control-label">Tip bilješke</label>
        <select name="noteType" id="noteType" class="form-control">
            <option value="Task" '.(($note->description=='Task')?"selected":"").'>Task</option>
            <option value="Chore" '.(($note->description=='Chore')?"selected":"").'>Chore</option>
            <option value="Emergency" '.(($note->description=='Emergency')?'selected':'').'>Emergency</option>
            <option value="Business" '.(($note->description=='Business')?'selected':'').'>Business</option>
        </select>
    </div>
    <div class="container">
        <label for="status" class="control-label">Status</label>
        <select name="status" id="status" class="form-control">
            <option value="Kreiran" '.(($note->status=='Kreiran')?'selected':'').'>Kreiran</option>
            <option value="Izvršen" '.(($note->status=='Izvršen')?'selected':'').'>Izvršen</option>
        </select>
    </div>
    <div class="container">
        <label for="dueDate" class="control-label">Dan izvršetka</label>
        <input type="text" name="dueDate" id="dueDate" class="form-control" value="'.$note->dueDate.'">
    </div>
    <div class="container">
        <input type="hidden" name="createdBy" id="createdBy" class="form-control" value="'.$note->createdBy.'">
        <input type="hidden" name="createdOn" id="createdOn" class="form-control" value="'.$note->createdOn.'">
        <input type="hidden" name="id" id="id" class="form-control" value="'.$note->id.'">
    </div>
    <br>
    <div class="container">
        <input type="submit" class="btn btn-primary" value="Spremi">
    </div>
</form>
';
?>