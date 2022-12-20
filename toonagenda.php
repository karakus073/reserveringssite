<?php
require 'config.php';

$query = "SELECT * FROM crud_php";

$result = mysqli_query($mysqli, $query);

if (mysqli_num_rows($result) > 0)
{
    echo "<table border='1px'>";
    echo "<tr><th>Onderwerp</th><th>Inhoud</th><th>Detail</th><th>Verwijder</th><th>Aanpas</th></tr>";
    while ($item = mysqli_fetch_assoc($result)) 
    {
        echo "<tr>";

            echo "<td>" . $item['Onderwerp'] . "</td>";
            echo "<td>" . $item['Inhoud'] . "</td>";
            echo "<td><a href='detail.php?id=" . $item['ID'] . "'>details</a></td>";
            echo "<td><a href='verwijder.php?id=" . $item['ID'] . "'>verwijder</a></td>";
            echo "<td><a href='pasaan.php?id=" . $item['ID'] . "'>aanpas</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} 
else
{
    echo "<p>Geen items gevonden!<p/>";
}
            echo "<a href='toevoeg.php'>TOEVOEG<a/></br>";
            echo "<a href='logout.php'>LOGOUT<a/>";

$result = mysqli_query($mysqli, $query);

if  (!$result)
{
    echo "<p>FOUT!</p>";
    echo "<p>" . $query . "</p>";
    echo "<p>" . mysqli_error($mysqli) . "</p>";
    exit;
}