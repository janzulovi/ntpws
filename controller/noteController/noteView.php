<?php 
    if ($page == 1) {
        include("./controller/noteController/methods/getNotes.php");
    } 
    elseif ($page == 2) {
        include("./controller/noteController/methods/createNote.php");
    }
    elseif ($page == 3) {
        include("./controller/noteController/methods/getNote.php");
    }
    elseif ($page == 4) {
        include("./controller/noteController/methods/editNote.php");
    }
    else include("error.php");
    
?>