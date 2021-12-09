<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    <!-- this is a table code-->
<table class="w3-table-all w3-hoverable">
    <thead>
    <tr class="w3-light-grey">
            <th>astronaut_id</th>
            <th>mission_id</th>
</thead>
            
            
</tr>
<?php
// this code connects to database
$conn = mysqli_connect("localhost","admin","password","Dynamite");
if ($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT * FROM Attends";
$result = mysqli_query($conn, $sql);
// this code shows the database outcome
if (mysqli_num_rows($result) > 0) { 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["astronaut_id"] . "</td><td>" . $row["mission_id"] . "</td></tr>";
        }
}
else{
    echo  "0 results";
}
?>
</table>
</body>
</html>