<?php

// POST scenarij

if($_SERVER['REQUEST_METHOD'] = 'POST' ) {
 
   

    $user =[
        'user_id' => $id,
         'place_in_row' => (int) $_POST['place_in_row'],
         'name' => $_POST['name'],
         'surname' => $_POST['surname'],
    ];

    $users = unserialize(file_get_contents(__DIR__ . '/users.ser'));

    $users[] = $user;

    header('Location: http://localhost/9-JS-PHP/014/users.php');
    die;
}


//GET scenarij

$users = unserialize(file_get_contents(__DIR__ . '/users.ser'));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>

    <?php require __DIR__ . '/menu.php' ?>


    <form action="" method="post">
        <fieldset>
            <legend>ADD NEW:</legend>
            <label>name:</label>
            <input type="text" name  = "name">
            <label>Surname:</label>
            <input type="text" name  = "surname">
            <label>row:</label>
            <input type="text" name  = "place_in_row">
            <button type="submit">ADD</button>
        </fieldset>
    </form>
    
    
</body>
</html>