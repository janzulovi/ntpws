<?php
include("./controller/userController/methods/getUsers.php");

?>

<section>
    <form action="" method="post" class="form-horizontal">
    <input type="hidden" name="control" id="control" value="true">
    <div class="container">
        <label for="description" class="control-label">Korisničko ime</label>
        <input type="text" name="username" id="username" class="form-control" required>
    </div>
    <div class="container">
        <label for="createdBy" class="control-label">Lozinka</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <br>
    <div class="container">
        <button type="submit" class="btn btn-primary">Login</button><button type="reset" class="btn">Resetiraj</button>
    </div>
    </form>
</section>

<?php
if(!isset($_POST['control'])){
    $_POST['control'] = false;
}

if($_POST['control'] == true){
    $_SESSION['control'] = $_POST['control'];

    if(isset($_POST['username'])){
        $_SESSION['user']['username'] = $_POST['username'];
    }

    if(isset($_POST['password'])){
        $_SESSION['user']['password'] = $_POST['password'];
    }
    
    foreach ($users as $user) {
        if($user->username == $_SESSION['user']['username'] && $user->password == $_SESSION['user']['password']){
            $_SESSION['home'] = true;
            break;
        }
    }

    if(!isset($_SESSION['home']) || $_SESSION['home'] == false) {
        session_destroy();
        echo "<div class='container'><span class='text-danger'>Korisnik ne postoji! Registrirajte se ili pokušajte ponovo.</span></div>";
    }
    else {
        header("Location: /ntpws/index.php?page=1");
    }
}

?>