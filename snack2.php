<?php
/*
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato

*/



if (isset($_GET['name'], $_GET['mail'], $_GET['age'])) {

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
}

$correctName = strlen($name) > 3;



if ($correctName && $age == is_numeric($age)) {
    echo 'accesso riuscito';
} else {
    echo 'accesso negato';
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="./snack2.php" method="GET" class="container w-75">
        <div class=" form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" name="age" class="form-control" id="age" placeholder="Enter age" required>
        </div>

        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
</body>

</html>