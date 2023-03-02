console.clear()
function rand(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1) + min);
}


console.log('-------2.1-------');
/*
Vyksta automobilių žiedinės lenktynės. Automobiliui Nr. 55 liko nuvažiuoti 10 ratų. 
Suprogramuokite for ciklą, kuris imituotų 10 ratų automobilio važiavimą ir kiekviename cikle 
pateiktų (atspausdintų) kiek ratų dar liko automobiliui nuvažiuoti. Paskutinis skaičius turėtų būti 1. 
Visas rezultatas turėtų būti toks:  10 9 8 7 6 5 4 3 2 1 (skaičiai gali būti atspausdinti stulpeliu).
*/
const likoRatu = 10;
for (let i = likoRatu; i >= 1; i--) {
    console.log(`liko ratu: ${i}`);
}

console.log('-------2.2-------');
/* 
Vyksta automobilių žiedinės lenktynės. Automobiliui Nr. 55 liko nuvažiuoti 10 ratų. 
Kiekvieną ratą automobilis važiuoja skirtingu nuo 120 iki 220 km/h greičiu. 
Suprogramuokite for ciklą, kuris imituotų 10 ratų automobilio važiavimą, rand() funkcija 
generuokite atsitiktinį automobilio greitį o visiems ciklams pasibaigus pateikite bendrą visų 10 ratų vidutinį greitį.
*/
let totalSpeed = 0;
const likoVaziot = 10;
for(let i = likoVaziot; i >= 1; i--) {
    let speed = rand(120, 220);
    console.log(`liko ratu: ${i}`, ' => ', `greitis ${speed} km/h`);
    totalSpeed += speed;
}
console.log(`vidutine greitis per 10 ratu:  ${totalSpeed/likoVaziot} km/h`);



console.log('-------2.3-------');
/* 
Vyksta automobilių žiedinės lenktynės. Automobiliui Nr. 55 liko nuvažiuoti 10 ratų. 
Jo kuro bake liko 44 litrai kuro. Kiekviename rate automobilis sunaudoja atsitiktinį 
kiekį kuro: nuo 3 iki 6 litrų. Suprogramuokite for ciklą, kuris imituotų 10 ratų automobilio važiavimą, 
o ciklams pasibaigus pateikite išvadą ar automobiliui užteko kuro įveikti visus 10 ratų. 
Kurui pasibaigus ciklą nutraukite anksčiau laiko. 
*/
let totalFuel = 0;
const likoL = 44;
for(let i = 10; i >= 1; i--) {
     let useFuel = rand(3, 6);
     totalFuel += useFuel;
     if (totalFuel > likoL) {
        console.log('neuzteks');
        break;
      } 
      console.log(`liko ratu: ${i}`,  ' => ', `kuro per rata: ${useFuel}`, `isnaudota kuro`, ' => ', totalFuel);
      if (totalFuel < likoL) {
        continue;
      
     
    }
}










