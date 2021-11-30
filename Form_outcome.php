<?php
define("DB_NAME", "test");
define("DB_USER", "admin");
define("DB_PASSWORD", "password");
define("DB_HOST", "localhost");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$connection) {
    die('Could not connect:'.mysqli_error());
}
else {
    echo "It worked!"."<br>";
}
$db_selected = mysqli_select_db($connection, DB_NAME);
if (!$db_selected){
    die('Can\'t use ' .DB_NAME.': ' .mysqli_error($connection));
}
$name = $_POST["name"]; 
$phone = $_POST["ContactNumber"];
$email = $_POST["email"];
$address = $_POST["Address"];

$sql = "INSERT INTO form(name, email, number, address) VALUES ('$name', '$email', $phone, '$address')";
if(!mysqli_query($connection, $sql)){
    die("Error:".mysqli_error($connection));
}
else{
    echo "Data Inserted";
}
mysqli_close($connection);

?>

