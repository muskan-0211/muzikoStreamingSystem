<?php  
if (isset($_POST['submit'])) {  
    extract($_POST);  
    $servername = "localhost ";  
    $username   = "root";  
    $password   = "";  
    $dbname     = "muziko";  
    // Create connection  
    $conn       = new mysqli($servername, $username, $password, $dbname);  
    // Check connection  
    if ($conn->connect_error) {  
        die("Connection failed: " . $conn->connect_error);  
    }  
    $sql = "INSERT INTO `sign_up` (Name,E_mail,Password,Contact_no,City,Address)  
  
VALUES ('$Name','$E_mail','$Password','$Contact_no','$Address')";  
    if ($conn->query($sql) === TRUE) {  
        header('Location: login.php');  
    } else {  
        echo "Error: " . $sql . "<br>" . $conn->error;  
    }  
    $conn->close();  
}  
?> 