<?php
define("DB_NAME", "Dynamite");
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
$destination = $_POST["destination"];
$launch_date = $_POST["launch_date"];
$type = $_POST["type"];
$crew_size = $_POST["crew_size"];
$target_id = $_POST["target_id"];

$sql = "INSERT INTO mission( name, destination, launch_date, type, crew_size, target_id) VALUES ( '$name', '$destination', '$launch_date', '$type', '$crew_size', '$target_id')";
if(!mysqli_query($connection, $sql)){
    die("Error:".mysqli_error($connection));
}
else{
    echo "Data Inserted";
}
mysqli_close($connection);

?>
