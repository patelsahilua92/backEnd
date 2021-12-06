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
$mission_id = $_POST["mission_id"];
$astronaut_id = $_POST["astronaut_id"];

$sql = "INSERT INTO Attends(mission_id, astronaut_id) VALUES ('$mission_id', '$astronaut_id')";
if($connection->query ($sql) === TRUE){

  $update =  "UPDATE mission SET crew_size = crew_size + 1 WHERE mission_id = $mission_id";
  mysqli_query($connection, $update);

  $update_astronaut_id =  "UPDATE astronaut SET no_missions = no_missions + 1 WHERE astronaut_id = $astronaut_id";
  mysqli_query($connection, $update_astronaut_id);
    
}
else{
    die("Error:".mysqli_error($connection));
}
mysqli_close($connection);

?>
