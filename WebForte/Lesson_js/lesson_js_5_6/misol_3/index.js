/* ** Misol #3** */

// Tub sonni tekshirish funksiyasi
let sonlar = [1, 2, 5, 77, 54, 3, 2, 1, 17, 23];

for (let i = 0; i < sonlar.length; i++) {
    let son = parseInt(sonlar[i]);
    let tubSon = true;

    sonniTekshir(son);

    function sonniTekshir(son) {
        if (son > 1) {
            tubSonniAniqla();
            natijaniChiqarish();
        } else {
            console.log("Bu son tub son emas.");
        }
    }

    function tubSonniAniqla() {
        // Eng kichik tub son  2 dan boshlangan
        for (let j = 2; j < son; j++) {
            if (son % j == 0) {
                tubSon = false;
                break;
            }
        }
    }

    function natijaniChiqarish() {
        if (tubSon) {
            console.log(`sonlar[${i}] = ${son} tub son`);
            $('#natija').append('<div id="r' + i + '" class="natija"> sonlar[' + i + '] = ' + son + '</div>')
        }
    }
}