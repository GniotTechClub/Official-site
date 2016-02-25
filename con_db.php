<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techclub";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["submit"])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        $sql = "INSERT INTO contact (name, email, message)
    VALUES ('$name','$email','$message')";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "New record created successfully";
        //echo '<script>location.assign(contacts.php);</script>';
        header("location: contacts.php");
    }
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>