<?php

$animal = 'bebras';

$animal2 = 'barsuk';

function go(&$a) //$a - parametras
{
    //global $animal; //плохой пример

    $hello = 'LABUKAS';
    //echo $animal;
    $a = 'dramblys';

    echo $a;
}

go($animal2); // argumentas

echo $animal2;

/////////////////////////////////////

function fun($vienas, $du = 7) 
{
    return $vienas * $du;
}

function fun2($a, ...$all) 
{
    $count = 1;
    foreach($all as $value) {
        $count = $count * $value;
        return $count;
    }
}

$result = fun(11, 2);
$result = fun2(11, 8);

$arg = [14, 22];
$result = fun(...$arg); // способ вызова функции (unpacking via ... - variadic)

echo "<h1>$result</h1>";

/////////////////////////////////////

function fun3()
{
    static $counter = 0;   //static

    return ++$counter;
}

$result = fun3();
echo "<h1>$result</h1>";

$result = fun3();
echo "<h1>$result</h1>";

$result = fun3();
echo "<h1>$result</h1>";



/////////////////////////////////////

$fun4 = function() {
    return '<h1 style = "color: coral;">*****</h1>';  //анонимная функция
};

echo $fun4();

//

// $result = $fun4();

function fun5($fun) {  /// here $fun = callback;
    return $fun();
}

// $result = fun5(function() {
//     return '<h1 style = "color: skyblue;">*****</h1>';
// });

$color = 'crimson';

$fun4 = function() use ($color) {
    return '<h1 style = "color:  '. $color .';">*****</h1>';  //анонимная функция
};

$fun6 = fn() => '<h1 style = "color: '. $color .'; ">*****</h1>'; //arrow функция

$result = fun5($fun4);
  
//$result = fun5($fun6);


$masyvas = [
    ['bebras','kietas'],
    ['zuikis','trumpas'],
    ['vilkas','pilkas'],
    ['dramblys','storas'],
];

function sortIt1($a, $b) {
    return $a[0] <=> $b[0];
}

$sortIt2 = function($a, $b) {
    return $a[0] <=> $b[0];
};

$sortIt3 = fn($a, $b) => $b[0] <=> $a[0];


//usort($masyvas, 'sortIt1'); // no popupar way

//usort($masyvas, $sortIt2);

//usort($masyvas, $sortIt3);

usort($masyvas, fn($a, $b) => $a[1] <=> $b[1]);

echo '<pre>';
//print_r($masyvas);


function recursive($num){
    echo $num, 'in <br>';

    if($num < 5){
        //Kviečiame save. Padidiname numerį vienetu.
        recursive($num + 1);
    }
    echo $num, 'out <br>';
}


$startNum = 1;
recursive($startNum);


$monster = [
    7, 
    88, 
    [
        8, 
        [
            78, 
            [
                80,
                [5, 88]
            ],
            8,
        [8, 7, [6, 88], 33]
        ],
        7, 
        [7]
    ], 
    [8, 77, 22],
    [8, 11, 0],
    8,
    [8, 7, 22],
    77

];

print_r($monster);

function killMonster($mas) {

    $sum = 0;

    foreach ($mas as $val) {
        if (is_array ($val)) {
            $sum = $sum + killMonster($val);
        } 
        else {
            $sum = $sum + $val;
        }
    }
    return $sum;

}
echo '<h1>';
echo killMonster($monster);
echo '</h1>';




