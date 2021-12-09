<!doctype html>
<html>
    <head>
      <!-- this code is from bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  </head>
  </head>
  <center><h1 style="background-color:DodgerBlue;">Welcome to Dynamite forms</h1></center>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!-- this is a nav-bar code-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="Targets.php">Target Form</a>
           </li>
           <li class="nav-item">
          <a class="nav-link" href="mission.php">Mission Form</a>
           </li>
          <li class="nav-item">
            <a class="nav-link " href="Astronaut.php">Astronaut Form</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Attends.php">Attend Form</a>
             </li>
          
           
           
        </ul>
        <form class="d-flex">
          <!-- this one is search button code-->
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
        <title>MY first PHP</title>
</head>
<body background="sky 2.jfif">
<style>
              body {
          background-color: yellowgreen;
        }
        </style>
    
    <div class="w3-text-red">
          <center><h1>The Attends Form</h1></center>  
      </div>                                                                                                                
</body>
<body>  
<div class="w3-text-red">
  <!-- this is a attends form code-->
<form action="Attends_outcome.php" method ="POST">
<center>mission_id: <input type="number" name="mission_id"><br><br>
astronaut_id: <input type="number" name="astronaut_id"><br><br>
<input type="submit"></center><br><br>
</div> 

</form>
<!-- this code can help us to open the database table-->
<center><a href="table_att.php"><button>Show Table</button></a></center>
</body>
</html>