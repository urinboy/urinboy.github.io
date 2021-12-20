/* ** Misol #2** */
let sonlar = [1, 2, 5, 77, 54, 3, 2, 1, 17, 23];
let sum = 0,
    soni = 0;
toqYigindi();

function toqYigindi() {
    for (let i = 0; i < sonlar.length; i++) {
        if (sonlar[i] % 2 == 1) {
            soni++;
            sum += sonlar[i];
        } else {
            continue;
        }
    }

}


function massiv(sonlar) {
    for (let i = 0; i < sonlar.length; i++) {
        if (sonlar[i] % 2 == 1) {
            console.log('sonlar[', i, '] = ', sonlar[i]);
        } else {
            continue;
        }
    }
}

console.log('yig`indisi: ', sum, ' soni: ', soni);
document.getElementById("misol").innerHTML = "Massiv elementlari yig'indisi = " + sum + ", <br>Soni = " + soni + " ta";
massiv(sonlar);