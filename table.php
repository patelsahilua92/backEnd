<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>name</th>
            <th>Password</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","test");
if ($conn-> connect_error) {
    die("Connection failed:". $conn-> connect_error);
}

$sql = "SELECT *FROM sample";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["username"] . "</td><td>" . $row[
            "password"] . "</td></tr>";
        }
        echo "</table>";
}
?>
</table>
</body>
</html>