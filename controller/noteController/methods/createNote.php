<?php

if(!isset($_SESSION['user'])){
    echo "<div class='container'><h1>Ulogirajte se kako bi vidjeli svoje bilješke.</h1></div>";
}
else echo '
<div class="container">
    <h1>Izradi novu bilješku</h1>
</div>

<form action="./controller/noteController/methods/sendNote.php" method="POST" class="form-horizontal">
    <div class="container">
        <label for="title" class="control-label">Naslov</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="container">
        <label for="description" class="control-label">Opis</label>
        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="container">
        <label for="dueDate" class="control-label">Vrijeme izvršavanja</label>
        <input type="date" name="dueDate" id="dueDate" class="form-control">
    </div>
    <div class="container">
        <label for="noteType" class="control-label">Tip bilješke</label>
        <select name="noteType" id="noteType" class="form-control">
            <option value="Task">Task</option>
            <option value="Chore">Chore</option>
            <option value="Emergency">Emergency</option>
            <option value="Business">Business</option>
        </select>
    </div>
    <br>
    <div class="container">
        <button type="submit" class="btn btn-primary">Spremi</button><button type="reset" class="btn">Izbriši</button>
    </div>
</form>

';
?>