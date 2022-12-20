<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['datum']) &&  isset($_POST['persoon']) && isset($_POST['extra'])) {
        
        
        $datum = $_POST['datum'];

        echo $datum;
        $persoon = $_POST['persoon'];
        $extra = $_POST['extra'];
        $host = "localhost";
        $dbUsername = "87250";
        $dbPassword = "Putsebocht72";
        $dbName = "login_beroeps";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
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