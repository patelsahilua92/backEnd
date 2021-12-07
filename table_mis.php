<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
</head>
<body>
    <table>
        <tr>
            <th>Mission_id</th>
            <th>name</th>
            <th>destination</th>
            <th>launch_date</th>
            <th>type</th>
            <th>crew_size</th>
            <th>target_id</th>
</tr>
<?php
$conn = mysqli_connect("localhost","admin","password","Dynamite");
if ($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT * FROM mission";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["name"] . "</td><td>" . $row[ "destination"] . "</td><td>" . $row["launch_date"] . 
        "</td><td>" . $row["type"] . "</td><td>" . $row["crew_size"] . "</td><td>" . $row["target_id"] . "</td></tr>";
        }
}
else{
    echo  "0 results";
}
?>
</table>
</body>
</html>