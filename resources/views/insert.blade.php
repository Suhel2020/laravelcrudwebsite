<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Data Insert</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link " href="/">Home </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/show">Show All Entry</a>
      
    </ul>
  </div>
</nav>


    
    <div class="container">
        <h1 class="text-center">ADD DATA</h1>
        <form method="POST" action="/store">
            @csrf
            <div class="mb-3">
                <label><b>Student Frist Name:</b></label>
                <input type="text" name="fname" class="form-control">
            </div>
            <div class="mb-3">
                <label><b>Student Last Name:</b></label>
                <input type="text" name="lname" class="form-control">
            </div>
            <div class="mb-3">
                <label><b>Student Phone Number:</b></label>
                <input type="text" name="number" class="form-control">
            </div>
            <input type="submit" name="insert" value="Insert" class="btn btn-primary">
           
        </form>
        
    </div>
    
</body>
</html>