<?php
define("DB_NAME", "Dynamite");
define("DB_USER", "admin");
define("DB_PASSWORD", "password");
define("DB_HOST", "localhost");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$connection) {
    die('Could not connect:'.mysqli_error());
}
// this shows wethear the code runs or not
else {
    echo "It worked!"."<br>";
}
$db_selected = mysqli_select_db($connection, DB_NAME);
if (!$db_selected){
    die('Can\'t use ' .DB_NAME.': ' .mysqli_error($connection));
}
$id = test_input($_POST["id"]);
$name = test_input($_POST["name"]); 
$first_mission = test_input($_POST["first_mission"]);
$type = test_input($_POST["type"]);
$no_mission = test_input($_POST["no_mission"]);

$sql = "INSERT INTO targets( id, name, first_mission, type, no_mission) VALUES ( '$id', '$name', '$first_mission', '$type', '$no_mission')";
if(!mysqli_query($connection, $sql)){
    die("Error:".mysqli_error($connection));
}
else{
    echo "Data Inserted";
}
mysqli_close($connection);

?>
