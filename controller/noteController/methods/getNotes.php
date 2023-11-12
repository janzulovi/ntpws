<?php 

include("apiUrl.php");
include("./model/note.php");

$data = file_get_contents($url."note", true,  stream_context_create($context));
$decoded = json_decode($data);
?>

<h1 class="h1">Welcome!</h1>
<table class="table table-responsive">
    <thead>
        <tr>
            <th>Naslov</th>
            <th>Opis</th>
            <th>Izradio</th>
            <th>Tip poruke</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($decoded as $podatak){
                $note = new Note();
                
                $note->id = $podatak->id;
                $note->title = $podatak->title;
                $note->description = $podatak->description;
                $note->createdBy = $podatak->createdBy;
                $note->noteType = $podatak->noteType;
            
                echo '
                    <tr>
                        <td>'. $note->title .'</td>
                        <td>'. $note->description .'</td>
                        <td>'. $note->createdBy .'</td>
                        <td>'. $note->noteType .'</td>
                        <td><a href="./index.php?page=3&id='.$note->id.'">Details</a></td>
                    </tr>
                ';
            }
        ?>
    </tbody>
</table>