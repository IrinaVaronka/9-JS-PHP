<?php



// file_put_contents(__DIR__ . '/labas.txt', "\nRACOON", FILE_APPEND);

// echo '<pre>';

// echo file_get_contents(__DIR__ . '/labas.txt');

//1.ПОЛУЧЕНИЕ И ДОБАВЛЕНИЕ ДАННЫХ ИЗ ФАЙЛА ИСПОЛЬЗУЯ JSON:

//проверяем, существует ли файл. Если файла нет, данных нет, значит $data равно пустому массиву. 
//Если файл есть - получаем данные из файла с помощью file_GET_contents, данные переводим в массив с помощью json_decode.

// if(!file_exists(__DIR__ . '/data.json')) {
//     $data = [];
// } else {
//     $data = file_get_contents(__DIR__ . '/data.json');
//     $data = json_decode($data, 1); // здесь уже массив; 1 - для того, чтобы массив не превращался в объект;
// }

// echo '<pre>';
// print_r($data);

// //Добавляем к массиву новый массив:

// $data[] = ['number' => rand(100, 999), 'color' => rand(0, 1) ? 'crimson' : 'skyblue'];


// //данные переводим в стринг с помощью json_encode и записываем в файл через PUT:

// $data = json_encode($data);
// $data = file_put_contents(__DIR__ . '/data.json', $data);



//1.ПОЛУЧЕНИЕ И ДОБАВЛЕНИЕ ДАННЫХ ИЗ ФАЙЛА ИСПОЛЬЗУЯ SEREALIZE:  (работает только внутри PHP)

if(!file_exists(__DIR__ . '/data.ser')) { //.ser - сами придумали.
    $data = [];
} else {
    $data = file_get_contents(__DIR__ . '/data.ser');
    $data = unserialize($data); // здесь уже массив.
}

echo '<pre>';
print_r($data);

//Добавляем к массиву новый массив:

$data[] = ['number' => rand(100, 999), 'color' => rand(0, 1) ? 'crimson' : 'skyblue'];


//данные переводим в стринг с помощью serialize и записываем в файл через PUT:

$data = serialize($data);
$data = file_put_contents(__DIR__ . '/data.ser', $data);
