console.clear()
function rand(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);
}

/* Programiškai ridenkite du žaidimo kauliukus- sugeneruokite du atsitiktinius skaičius nuo 1 iki 6.
 Jeigu kauliukų suma didesnė nei 8 jūs laimėjote, priešingu atveju pralošėte. 
 Išveskite atsakymą, kuriame būtų abiejų kauliukų reikšmės ir išvada laimėjote ar pralošėte.*/
 
 console.log('------1.1--------');
let bones1 = [...Array(2)].map(_=> rand(1, 6));
console.log(bones1);
const win1 = bones1.reduce((a, b) => (a + b) > 8 ? 'win' : 'lose');
console.log(win1);


/* Gyveno du katinukai, Pilkis ir Murklys. Jų svoriai kilogramais buvo atsitiktiniai dydžiai nuo 3 iki 6. 
Parašyti programą, kuri išvestų katinukų svorius ir apskaičiuotų, kuris katinukas yra lengvesnis. 
Atsakymas turi būti katinukų vardai su jų svoriais ir lengvesnio katinuko vardas. 
Jeigu katinukai sveria vienodai, vietoj katinuko vardo parašykite, kad “katinukų svoriai vienodi”. */


console.log('-------1.2-------');
const weight = [...Array(2)].map(_ => rand(3, 6));
const cat1 = console.log(weight[0] + '->', 'Pilkis'); 
const cat2 = console.log(weight[1] + '->', 'Murklys');
const catLengvas = (weight[0] > weight[1]) ? 'Murklys' : (weight[1] > weight[0]) ? 'Pilkis' : 'katineliu svoriai lygus';
console.log(catLengvas);


/* Nojus pasiruošė potvyniui ir nusipirko dvi valtis. Vienoje telpa 15 katinukų, kitoje 15 karvių 
(katinukus galima sodinti tik į katinukų valtis, o karves tik į karvių, maišyti negalima).
 Prasidėjus liūčiai pas Nojų atėjo atsitiktinis skaičius nuo 0 iki 30 katinukų ir toks pats atsitiktinis skaičius karvių. 
 Išveskite atėjusių katinukų ir karvių skaičių ir ar Nojus galės juos sutalpinti į valtis. 
 Jeigu netelpa tik katinukai arba tik karvės vistiek išveskite “Netelpa”. Kas konkrečiai netelpa išvedinėti nereikia. 
 “Telpa” išveskite tik tuo atveju jeigu ir katinukai ir karvės telpa. */

 
console.log('------1.3--------');
const randGivunai = [...Array(2)].map(_ => rand(0, 30));
const cats = console.log(randGivunai[0] + '->', 'cats'); 
const cows = console.log(randGivunai[1] + '->', 'cows');
const telpa = (randGivunai[0] > 15) ? 'Netelpa' : (randGivunai[1] > 15)? 'Netelpa' : 'Telpa';
console.log(telpa);

/*
Antanas nusipirko naują butą ir pinigų jam liko nedaug. Dabar jis niekaip negali apsispręsti ką pirmiausiai pirkti: 
televizorių, skalbimo mašiną ar šaldytuvą. Todėl nusprendžia ridenti kauliuką (atsitiktinis skaičius nuo 1 iki 6) 
ir jeigu iškris 1 arba 5 pirkti televizorių, jeigu 3 arba 4 pirkti skalbimo mašiną ir jeigu 2 arba 6 - šaldytuvą. 
Padėkite Antanui apsispręsti. Ridenkite kauliuką ir parašykite atsakymą kokį daiktą jam pirkti.
*/

console.log('-------1.4-------');
const randKauliuka = [...Array(1)].map(_ => rand(1, 6));
let pirkti = (randKauliuka == 1 || randKauliuka == 5) ? 'televizorius' : (randKauliuka == 3 || randKauliuka == 4) ?'skalbimo masina' : 'šaldytuvas';
console.log(randKauliuka + ' ->', pirkti);



/* 
(BOSO lygis) Sugeneruokite tris atsitiktinius skaičius nuo 1 iki 7. 
Skaičius atspausdinkite nuo mažiausio iki didžiausio. 
Pavyzdžiui: sugeneravus 4, 2, 4 juos reikia atspausdinti tokia tvarka: 2 4 4;
*/
console.log('-------1.5-------');
const numbers = [...Array(3)].map(_ => rand(1, 7));
let sortNumbers = console.log(numbers.sort());



















