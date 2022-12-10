
<?php
require "dbBroker.php";
require "PHPmodeli/korisnik.php";

session_start();

if(isset($_POST['username']) && isset($_POST['password'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $korisnik = new Korisnik(1,$name,$pass);
    $odg = Korisnik::login($korisnik,$conn); //pristup statickim funkcijama preko klase
    
    if($odg->num_rows==1){
        $_SESSION['bookclubuser_id'] = $korisnik->id;
        header('Location: home.php');
        exit();
    } 
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/indexstyle.css">
    <title>Bookclub: Log in</title>
</head>
<body>
    

        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form method="POST" action="#">
            <h3>Login Here</h3>
    
            <label for="username">Username</label>
            <input type="text" placeholder="your username" name="username">
    
            <label for="password">Password</label>
            <input type="password" placeholder="your password" name="password">
    
            <button type="submit" name="submit">Log in</button>
           
        </form>
    

    
</body>
</html>