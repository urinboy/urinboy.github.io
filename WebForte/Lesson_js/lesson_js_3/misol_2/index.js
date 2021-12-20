/* ** Misol #2** */

var N = parseInt(prompt("N sonini kiriting"));
   console.log('3.2 - misol: N = ', N); 
        // sonni bo'luvchilar sonini no'lga tenglayapmiz
 var sum = 0;
 // eng kichik tub son ikkidan boshlangani uchun siklni 2 dan boshladik
for(var i = 2; i <= N; i++){
    // Har bittasi uchun tekshiruv
    for (var j =2; j < i; j++) {
        // Sonni nechta songa bo'liinishini ko'rib chiqadi
        if(i%j == 0){
            sum++;
        }
    }
    // Sonni aniqlab console.log() ga chiqaradi
    if(sum == 0){
        // agar o'zigacha bo'lgan sonlarga bo'linmasa tub son deb oladi
        console.log(i);
        // sonni bo'luvchilar sonini no'lga tenglayapmiz
        sum=0;
    }
    else{
        // sonni bo'luvchilar sonini no'lga tenglayapmiz
        sum=0;
    }
}