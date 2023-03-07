<?php



//file_put_contents(__DIR__ . '/labas.txt', 'labas!');

//file_put_contents(__DIR__ . '/labas.txt', "\nRACOON", FILE_APPEND);

// echo '<pre>';

// echo file_get_contents(__DIR__ . '/labas.txt');

//SEREALIZE

if (!file_exists(__DIR__ . '/data.ser')) {
    $data = [];
} else {
    $data = file_get_contents(__DIR__ . '/data.ser');
    $data = unserialize($data);
}

echo '<pre>';
print_r($data);

$data[] = ['number' => rand(100, 999), 'color' => rand(0, 1) ? 'red' : 'skyblue'];

$data = json_encode($data);
$data = file_put_contents(__DIR__ . '/data/ser');