<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
  </head>
  </head>
  <!-- this code is for nav-bar-->
  <center><h1 style="background-color:DodgerBlue;">Welcome to Target table</h1></center>
  
  <!-- this is a title code-->
        <title>MY first PHP</title>
</head>
<body background="sky 2.jfif">
 <!-- this is a table code-->   
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
// here is the code for seeing the information which database have 
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
<center><a href="Targets.php"><button>Return</button></a></center>
</body>
</html>