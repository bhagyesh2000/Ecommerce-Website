
<?php
$servername = "localhost";
$username = "subs";
$password = "subscribe";
$db="ecommerce";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_POST["email"];
if($email!=''){
    $sql = "INSERT INTO subscribe (id,email,adddate)
VALUES ('', '".$email."', now())";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
   header("Location:index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
    //$msg="Thank you for subscribing";
}
?>
