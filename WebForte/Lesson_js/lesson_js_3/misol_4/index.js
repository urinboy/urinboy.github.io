/* ** Misol #4** */

var N = parseInt(prompt("N sonini kiriting"));
console.log('3.4 - misol: N = ', N);
var sum = 0;
// juft sonni tekshirish uchun for
for(var i = N; i >= 1; i--){
    // sonni va undan oldingi sonni ko'paytrmasi
    sum = i*(i-1);
    console.log('i = ', i, ' sum = ', sum);
    sum = 0;
}
