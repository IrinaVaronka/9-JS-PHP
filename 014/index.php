<?php


function getUnique($to)
{
    static $ids = [];
    do {
        $id = rand(1, $to);
    } while(in_array($id, $ids));
    $ids[] =$id;
    return $id;
}

$users = array_map(fn($_) => ['user_id' => getUnique(30), 'place_in_row' => rand(1, 100)], range(1, 30));
echo '<pre>';
print_r($users);


/* 7
*/

function randString()
{
    $letters = range('a', 'z');
    $out = '';
    foreach(range(1, rand(5, 15)) as $_) {
        $out .= $letters[rand(0, count($letters) -1 )];
    }
    return $out;
}

usort($users, fn($a, $b) => $a['user_id'] <=> $b['user_id']);

$users = array_map(function($users) {
    $user['name'] = randString();
    $user['surname'] = randString();
    return $user;
}, $users);

file_put_contents(__DIR__ . 'users.ser', serialize($users));

echo '<pre>';
print_r($users);





