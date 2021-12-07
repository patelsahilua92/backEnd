<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
</head>
<body>
    <table>
        <tr>
            <th>name</th>
            <th>no_missions</th>
            
            
</tr>
<?php
$conn = mysqli_connect("localhost","admin","password","Dynamite");
if ($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT * FROM astronaut";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row["no_missions"] . "</td></tr>";
        }
}
else{
    echo  "0 results";
}
?>
</table>
</body>
</html>