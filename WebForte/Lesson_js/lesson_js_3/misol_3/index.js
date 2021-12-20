/* ** Misol #3** */

var N = parseInt(prompt("N sonini kiriting"));
console.log('3.3 - misol: N = ', N);
var sum = 0;
// juft sonni tekshirish uchun for
for(var i = 1; i < N; i++){
    if(i%2 === 0){
        // sonning kvadratlar yi'g'indisi
        sum += Math.pow(i, 2);
        // sonni va kvadratini console ga chiqarish
        console.log('i = ', i, ' i^2 = ', Math.pow(i, 2));
    }
}
// yig'indini consolga chiqarish
console.log('Juft sonlarning kvadratlari yig`indisi: ', sum);