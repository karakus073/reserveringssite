<?php
require 'config2.php';

$query = "SELECT * FROM reservation, users ";

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0)
{
    echo "<table border='1px'>";
    echo "<tr><th>Username</th><th>Datum</th><th>Personen</th><th>Extra</th></tr>";
    while ($item = mysqli_fetch_assoc($result)) 
    {
        echo "<tr>";
            echo "<td>" . $item['username'] . "</td>";
            echo "<td>" . $item['datum'] . "</td>";
            echo "<td>" . $item['persoon'] . "</td>";
            echo "<td>" . $item['extra'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} 
else
{
    echo "<p>Geen items gevonden!<p/>";
}
$result = mysqli_query($mysqli, $query);

if  (!$result)
{
    echo "<p>FOUT!</p>";
    echo "<p>" . $query . "</p>";
    echo "<p>" . mysqli_error($mysqli) . "</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>    
</head>
<body>
<p><a href="login.php">Terug naar de login pagina</a>.</p>

</body>
</html>