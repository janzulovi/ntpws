<h1>Izradi novu bilješku</h1>

<form action="./controller/noteController/methods/sendNote.php" method="post">
    <div>
        <label for="title">Naslov</label>
        <input type="text" name="title" id="title">
    </div>
    <div>
        <label for="description">Opis</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="createdBy">Kreirao/la</label>
        <input type="text" name="createdBy" id="createdBy">
    </div>
    <div>
        <label for="noteType">Tip bilješke</label>
        <select name="noteType" id="noteType">
            <option value="Task">Task</option>
            <option value="Chore">Chore</option>
            <option value="Emergency">Emergency</option>
            <option value="Business">Business</option>
        </select>
    </div>
    <div>
        <button type="submit">Spremi</button><button type="reset">Izbriši</button>
    </div>
</form>