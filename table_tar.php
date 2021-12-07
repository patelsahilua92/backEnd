<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>first_mission</th>
            <th>type</th>
            <th>no_mission<th>
</tr>
<?php
$conn = mysqli_connect("Dynamite","admin","password","localhost");
if ($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT * FROM targets";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row[
            "first_mission"] . "</td><td>" . $row["type"] . "</td><td>" . $row["no_mission"] . "</td></tr>";
        }
        echo "</table>";
}
?>
</table>
</body>
</html>