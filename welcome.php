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
        p{width:500px; text-align: center; margin:0 auto;}
        .submit{background-color: #555555;color: white;background-color: white; color: black; border: 2px solid #555555;width: 200px; font-size: 16px; color:black; display: inline-block; text-decoration:none; !important}
        a{width: 200px; font-size: 16px; color:black; display: inline-block; text-decoration:none; !important}
        .button5 {background-color: white; color: black; border: 2px solid #555555;}
        .button5:hover {background-color: #555555;color: white;}
        .datee{width: 200px;}
        .personene{width: 200px;}
        .extraa{width: 200px}
    </style>
</head>
<body>
    <header>
    <h2 class="my-5">Hallo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welkom op onze pagina.</h2>
    <button class="button button5"><a href="reset-password.php" class="">Reset uw wachtwoord</a></button>
    <button class="button button5"><a href="logout.php" class="">Log uit uw account</a></button><br>
    <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia maxime inventore eius cumque assumenda doloribus veniam tempore, et a sint alias est nisi rem eligendi vel quos dolores iure quod. Lorem ipsum dolor sit,<br><br> amet consectetur adipisicing elit. Minima animi alias sequi cumque perspiciatis! Officia necessitatibus modi tenetur nostrum sed vel labore consequatur libero, mollitia possimus nesciunt quidem ipsa architecto!</p><br>
<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
} else{
    require_once "config.php";

    $sql = "SELECT id, userid FROM reservation WHERE userid = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "i", $_SESSION['id']);
            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) > 0){
                    echo"Je hebt al een resevering";
                }else{
?>
<form action="insertest.php" method="post"> 
<p>Vul hier de informatie in voor de informatieavond:</p><br>
    <div class="form-group">
        <label class="date">Datum</label><br>
        <input class="datee" type="date" name="datum" class="form-control" required>
        <span class="invalid-feedback"></span>
    </div>
    <div class="form-group">
        <label>Persoon</label><br>
        <input class="personene" type="text" name="persoon" class="form-control" required>
        <span class="invalid-feedback"></span>
    </div>
    <div class="form-group">
        <label>Extra</label><br>
        <input class="extraa" type="text" name="extra" class="form-control" required>
        <span class="invalid-feedback"></span>
    </div><br>
    <input class="button button5 submit" type="submit" value="Submit" name="submit">
</form>
<?php
                }
            } else{
                echo"execute mislukt";
            }
        }else{
            echo"prepair mislukt";
        }
}
?>
</body>
</html>
