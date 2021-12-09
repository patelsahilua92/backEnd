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
    
        
            <th>Mission_id</th>
            <th>name</th>
            <th>destination</th>
            <th>launch_date</th>
            <th>type</th>
            <th>crew_size</th>
            <th>target_id</th>
</tr>
</thead>
<?php
$conn = mysqli_connect("localhost","admin","password","Dynamite");
if ($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT * FROM mission";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row[Mission_id] . "</td><td>" . $row["name"] . "</td><td>" . $row[ "destination"] . "</td><td>" . $row["launch_date"] . 
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