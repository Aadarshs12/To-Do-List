<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-info"  href="#">To-Do List</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tasks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Completed</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <h1 class="text-center my-4 py-4 text-info">Welcome to To-Do List Site</h1>
    <div class="w-50 m-auto">
        <form action="data.php" method="post" autocomplete="off">
            <label for="title">Task: </label>
            <input class="form-control" type="text" name="title" Required placeholder="Enter Task To Add in TO-DO"><br>
            <button class="btn btn-success">Add to todo</button> 
            <br>
            <br>
        </form>
    </div>  
    <br>
    <hr class="w-50 m-auto">
    <div class="w-50 m-auto">
    <h1>Your Lists</h1>
    <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Tasks</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php
   include 'database.php';
   $sql="SELECT * FROM todos";
   $result=mysqli_query($conn,$sql);
   if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $title=$row['Title'];

    ?>
   <tr>
       <td><?php echo $id ?></td>
       <td><?php echo $title ?></td>
       <td>
           <a href="edit.php?id=<?php echo $id ?>" class="btn btn-success btn-sm">Edit</a>
           <a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm">Delete</a>
        </td>
    </tr>
    <?php
   }
}
    ?>
    
</tbody>
</table> 
</body>
</html>