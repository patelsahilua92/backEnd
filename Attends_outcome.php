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
$mission_name = $_POST["mission_name"];
$no_mission = $_POST["no_mission"]; 
$astronaut_id = $_POST["astronaut_id"];

$sql = "INSERT INTO Attends(mission_name, no_mission, astronaut_id) VALUES ('$astronaut_id', '$name', '$no_missions')";
if(!mysqli_query($connection, $sql)){
    die("Error:".mysqli_error($connection));
}
else{
    echo "Data Inserted";
}
mysqli_close($connection);

?>
