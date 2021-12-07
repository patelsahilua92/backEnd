<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    
<table class="w3-table-all w3-hoverable">
    <thead>
    <tr class="w3-light-grey">
            <th>id</th>
            <th>name</th>
            <th>first_mission</th>
            <th>type</th>
            <th>no_mission</th>

</tr>
</thead>
<?php
$conn = mysqli_connect("localhost","admin","password","Dynamite");
if ($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT * FROM targets";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row[ "first_mission"] . "</td><td>" . $row["type"] . 
        "</td><td>" . $row["no_mission"] . "</td></tr>";
        }
}
else{
    echo  "0 results";
}
?>
</table>
</body>
</html>