<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Username</th>
            <th>Password</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","test");
if ($conn-> connect_error) {
    die("Connection failed:" . $conn-> connect_error);
}

$sql = "SELECT id, Username, Password from sample";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
    while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Username"] . "</td><td>" . $row["Password"] . "</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 result";
}
$conn-> close();
?>
</table>
</body>
</html>

