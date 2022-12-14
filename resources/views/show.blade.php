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
        <h1 class="text-center">ALL DATA</h1>
        <table class="table table-bordered shadow text-center table-striped">
            <tr>
                <th>Student Id</th>
                <th>Student First Name</th>
                <th>Student Last Name</th>
                <th>Student Number</th>
                <th>Student Delete</th>
                <th>Student Edit</th>
            </tr>
            <tr>
                @foreach($posts as $post)
                <td>{{$post->id}}</td>
                <td>{{$post->post_fname}}</td>
                <td>{{$post->post_lname}}</td>
                <td>{{$post->post_number}}</td>
                <td><a href="/delete/{{$post->id}}" class="btn btn-danger">Delete</a></td>
                <td><a href="/edit/{{$post->id}}" class="btn btn-success">Edit</a></td>
            </tr>
                @endforeach

       </table>
        
        </form>
    </div>
</body>
</html>