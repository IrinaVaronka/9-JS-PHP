<?php

/* 2. Stringai (movie edition) - homework

8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.
*/

$a = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

echo $a;

preg_match('/\d/', $a, $result);

echo '<pre>';
print_r($result[0]);




/*
9. Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
*/

$p1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";

$p2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$rez = str_word_count($p2, 1, 'ąų');
echo '<pre>';
print_r($rez);

$count = 0;
foreach($rez as $word) {
    if (mb_strlen($word) <= 5) {
        $count++;
    }
}
echo "<h2>$count</h2>";