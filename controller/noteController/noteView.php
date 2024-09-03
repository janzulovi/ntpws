<?php 
    if ($page == 1) {
        include("./controller/noteController/views/getNotes.php");
    } 
    elseif ($page == 2) {
        include("./controller/noteController/views/createNote.php");
    }
    elseif ($page == 3) {
        include("./controller/noteController/views/getNote.php");
    }
    elseif ($page == 4) {
        include("./controller/noteController/views/editNote.php");
    }
    elseif ($page == 5) {
        include("./controller/noteController/methods/deleteNote.php");
    }
    elseif ($page == 6) {
        include("./controller/userController/views/loginView.php");
    }
    elseif ($page == 7) {
        include("./controller/userController/views/registerUser.php");
    }
    else include("error.php");
    
?>