<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welkom</title>
    <link rel="css.css" href="css.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body{ text-align: center; margin: 0;}
        a{width: 150px; font-size: 16px !important}
    </style>
</head>
<body>
    <header>
    <h2 class="my-5">Hallo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welkom op onze pagina.</h2>
        <a href="reset-password.php" class="btn btn-default">Reset uw wachtwoord</a>
        <a href="logout.php" class="btn btn-default">Log uit uw account</a>

        <form action="insertest.php" method="post">
    <div class="form-group">
        <label>Datum</label>
        <input type="date" name="datum" class="form-control" required>
        <span class="invalid-feedback"></span>
    </div>
    <div class="form-group">
        <label>Persoon</label>
        <input type="text" name="persoon" class="form-control" required>
        <span class="invalid-feedback"></span>
    </div>
    <div class="form-group">
        <label>Extra</label>
        <input type="text" name="extra" class="form-control" required>
        <span class="invalid-feedback"></span>
    </div>
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>
