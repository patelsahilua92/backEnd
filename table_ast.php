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
            <th>name</th>
            <th>no_missions</th>
</thead>
            
            
</tr>
<?php
$conn = mysqli_connect("localhost","admin","password","Dynamite");
if ($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT * FROM astronaut";
$result = mysqli_query($conn, $sql);
// this code connects the astronaut database to following page
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