<?php
session_start();

setcookie('animal', 'RACOON', time() - 3600 * 10);

echo '<pre>';
//POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {   // $_SERVER - массив PHP. В браузере видим в массиве метод, который использовался. 
                                                            

        // kazka padarom

        $_SESSION['animal'] = $_POST['animal'];
        $_SESSION['magic_number'] = $_POST['magic_number']; //po die ne mirsta


        header('Location: http://localhost/9-JS-PHP/013/');  //redirect
        die; // script done work

}

//GET scenarijus
$animal = $_SESSION['animal'] ?? '';     //создаем переменные, если первый раз на странице, и animal нет, после ?? идет пустой массив
$mn = $_SESSION['magic_number'] ?? '';
unset($_SESSION['animal'], $_SESSION['magic_number'])    // после рефреша данные не остаются



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>013</h1>
    <h2><?=$animal ?> <?=$mn ?></h2> 
    <form action="" method="post">
        <input type="text" name="animal">
        <br>
        <input type="range" min="0" max="10" value="0" name="magic_number">
        <br>
        <button type="submit">GO</button>
    </form>
</body>

</html>

