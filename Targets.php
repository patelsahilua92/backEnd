<!doctype html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
      a {
color: red;
}
      body {
        background-color: yellowgreen;
      }
      </style>
  </head>
  </head>
  <center><h1 style="background-color:DodgerBlue;">Welcome to my PHP</h1></center>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
          <li class="nav-item">
          <a class="nav-link active" href="Targets.php">Target Form</a>
           </li>
           <li class="nav-item">
          <a class="nav-link" href="mission.php">Mission Form</a>
           </li>
            <a class="nav-link " href="Astronaut.php">Astronaut Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="Attends.php">Attend Form</a>
             </li>
          
           
           
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
        <title>MY first PHP</title>
</head>
<body>
<style>
              body {
          background-color: yellowgreen;
        }
        </style>
    
    <center><h1>The Targets</h1></center>                                                                                                                  
</body>
<body>  
<form action="targets_outcome.php" method ="POST">
<center>id: <input type="integer" name="id"><br>
name: <input type="text" name="name"><br>
first_mission: <input type="date" name="first_mission"><br>
type: <input type="text" name="type"><br>
no_mission: <input type="text" name="no_mission"><br>
<input type="submit"></center>

</form>
</body>
</html>