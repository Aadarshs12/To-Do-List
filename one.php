<!-- header('Content-Type: text/html; charset=utf-8'); -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
    ?>
    <div class="">
    <h1 class="text-center my-4 py-4 text-info">Welcome to To-Do List Site</h1>
    <div class="w-50 m-auto">
        <form action="data.php" method="post" autocomplete="off">
            <label for="title">Task: </label>
            <input class="form-control" type="text" name="title" Required placeholder="Enter Task TO ADD in TO-DO"><br>
            <button class="btn btn-success">Add to todo</button> 
            <br>
            <br>
        </form>
    </div>  
    </div>
</body>
</html>


