<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['datum']) &&  isset($_POST['persoon']) && isset($_POST['extra'])) {
        
        
        $datum = $_POST['datum'];

        $persoon = $_POST['persoon'];
        $extra = $_POST['extra'];
        $host = "localhost";
        $dbUsername = "87250";
        $dbPassword = "Putsebocht72";
        $dbName = "login_beroeps";


        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        // require 'config2.php';

        // $query = "SELECT * FROM reservation WHERE $datum";

        // $result = mysqli_query($mysqli, $query);

        // if (mysqli_num_rows($result) > 0)
        // {


        //     header("location: welcome.php");
        //     exit();
        // }


        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
      
            $Insert = "INSERT INTO reservation(datum, persoon, extra) values(?, ?, ?)";
            
          
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sis",$datum, $persoon, $extra);
                if ($stmt->execute()) {
                    header("location: index.html");
                }
                else {
                    echo $stmt->error;
                }
        
            
              
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>