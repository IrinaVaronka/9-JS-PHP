function rand(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);
}


const bitGirls = ['Edita', 'Lina', 'Brigita', 'Deimantė', 'Justė'];
const cats1 = ['Murka', 'Rainius', 'Meilutė', 'Bosas', 'Dičkis'];


console.log('-------3.1-------');
/*
Prie masyvo bitGirls pradžios (ne galo!) pridėkite Nausėdą (po pridėjimo bitGirls turės 6 elementus).
*/

bitGirls.unshift('Nauseda');
console.log(bitGirls);


console.log('-------3.2-------');
/*
Sukurkite naują masyvą bitCats iš masyvo cats taip kad naujasis masyvas turėtų elementus iš mažų, 
dviejų narių, masyviukų: pirmas narys katinuko vardas, antras - katinuko svoris - atsitiktinės 
tekstinės reikšmės - “storas” arba “normalus”.
*/

let bigCats = cats1.map((a) => [a, rand(0, 5) ? 'storas' : 'normalus']);
console.log(bigCats);


console.log('-------3.3-------');
/*
bitCats masyve suskaičiuokite kiek yra storų ir normalių katinukų.
*/









