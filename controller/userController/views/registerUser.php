<div class="container">
    <h1>Kreiraj novog korisnika</h1>
</div>

<form action="./controller/userController/methods/createUser.php" method="post" class="form-horizontal">
    <div class="container">
        <label for="firstName" class="control-label">Ime</label>
        <input type="text" name="firstName" id="firstName" class="form-control" maxlength="50" required>
    </div>
    <div class="container">
        <label for="lastName" class="control-label">Prezime</label>
        <input type="text" name="lastName" id="lastName" class="form-control" maxlength="50" required>
    </div>
    <div class="container">
        <label for="username" class="control-label">Korisničko ime</label>
        <input type="text" name="username" id="username" class="form-control" maxlength="20" required>
    </div>
    <div class="container">
        <label for="password" class="control-label">Lozinka</label>
        <input type="password" name="password" id="password" class="form-control" maxlength="10" required>
    </div>
    <div class="container">
        <label for="email" class="control-label">Email</label>
        <input type="email" name="email" id="email" class="form-control" maxlength="50" required>
    </div>
    <div class="container">
        <label for="dateOfBirth" class="control-label">Datum rođenja</label>
        <input type="date" name="dateOfBirth" id="dateOfBirth" class="form-control" required>
    </div>
    <br>
    <div class="container">
        <button type="submit" class="btn btn-primary">Spremi</button><button type="reset" class="btn">Izbriši</button>
    </div>
</form>