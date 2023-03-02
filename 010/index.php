<?php
echo '<pre>';

$arr = array('Raccon', 'Beaver', 'Fox'); // старый синтаксис



$arr = [
    200 => 'Raccon',
    'B' => 'Beaver', // дополнительно указать желаемый индекс. 
    'Fox'
];

//array_push($arr, 'Wolf'); // старый способ добавления.
$arr[] = 'Wolf'; // добавить новое значение в массив.
$arr['1'] = 'Rabbit'; // 1 и '1' - одно и тоже. Может быть пустой ' '.
$arr[4] = 'Moose';

// print_r ($arr);
// echo '<br>';

//array_unshift($arr, 'Cat');   //добавляет 1 элемент в начало c 0 индексом.
//array_shift($arr); // убирает первый элемент.
//array_pop($arr); // убирает последнин элемент.

//sort($arr); // сортировка массива.
//usort($arr, fn($a, $b) => $b <=> $a); // с помощью функции, тут - сортировка в обратном порядке.

// $json = json_encode($arr);
// echo $json;
// echo '<br>';

// $arr = array_values($arr); // делает массив нормального вида.

// $json = json_encode($arr);
// echo $json;


// print_r ($arr);

// $colors = ['red', 'green', 'blue', 'yellow'];
// foreach ($arr as $value) {   
//    echo 'Reikšmė: ' . $value . '<br>';
// }

// echo '<br>';

// $colors = ['red', 'green', 'blue', 'yellow'];
// foreach ($arr as $index => $value) {   
//    echo 'Reikšmė: ' . $index . ' ' . $value . '<br>';
// }

// echo '<br>';

$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $index => &$value) {   
   // $colors[$index] = 'black'; // первый способ.
      $value = 'black';
  // echo 'Reikšmė: ' . $index . ' ' . $value . '<br>';
}



// $varna1 = 'balck';
// $varna2 = $varna1; // варна 2 имеет такое значение как варна1.
// $varna1 = 'white';
// echo $varna1, ' - ', $varna2;  

//print_r($colors);
//echo '<br>';

// $varna1 = 'balck';
// $varna2 = &$varna1; // варна 2 равна варна1. & это референс.
// $varna1 = 'white';
// echo $varna1, ' - ', $varna2;  



// $colors = ['red', 'green', 'blue', 'yellow'];

// foreach ($colors as $index => &$value) {} 
// unset($value);

// foreach ($colors as $index => $value) {
//     echo 'Reikšmė: ' . $index . ' ' . $value . '<br>';

// }
     
//echo '<br>';

// $colors = [
//     'red', 
//     'green', 
//     ['blue', 'skyblue' ],
//     'yellow'
// ];
// foreach ($colors as $value) {
//     if (is_array($value)) {
//         foreach ($value as $value2) {
//             echo 'Reikšmė: ' . $value2 . '<br>';
//         }
//     }
//     else { 
//         echo 'Reikšmė: ' . $value . '<br>';
// }
// }


$colors = [
    ['red', 'rr'],
    ['green', 'gg'],
    ['blue', 'skyblue'],
    ['yellow', 'yy']
];
foreach ($colors as $value) {
    foreach ($value as $value2) {
        echo 'Reikšmė: ' . $value2 . '<br>';
    }
}



for($x = 0; $x <5; $x++) {
    echo 'Numeris: '.($x+1).' <br>';
}


foreach(range(1, 5) as$x) {
    echo'Numeris: '.($x+1).' <br>';
}
print_r(range(1,5));









