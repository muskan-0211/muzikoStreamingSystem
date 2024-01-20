<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['mail']) &&
        isset($_POST['password']) && isset($_POST['contact']) &&
        isset($_POST['city']) && isset($_POST['address'])) {
        
        $Name = $_POST['username'];
        $E_mail = $_POST['mail'];
        $Password = $_POST['password'];
        $Contact_no = $_POST['contact'];
        $City = $_POST['city'];
        $Address = $_POST['address'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "muziko";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT E_mail FROM sign_up WHERE E_mail = ? LIMIT 1";
            $Insert = "INSERT INTO sign_up(Name, E_mail, Password, Contact_no, City, Address) values(?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $E_mail);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("ssssii",$Name, $E_mail, $Password, $Contact_no, $City, $Address);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
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
<html>
<body>
<a href="index.php">LOGIN</a>
</body>
</html>