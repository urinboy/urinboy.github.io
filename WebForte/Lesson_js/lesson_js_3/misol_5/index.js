/* ** Misol #5** */

var N = parseInt(prompt("N sonini kiriting"));
console.log('3.5 - misol: N = ', N);
var faSum = 0;
var fa = 1;
    for(var i = 1; i <= N; i++){
        // sonni factorialini hisoblaydi
        fa *= i;
        // sonni factorialini console ga chiqarish
        console.log('!', i, ' = ', fa);
        // sonni factoriallar yig'indisini hoblayapti
        faSum += fa;
    }
    
console.log('sum = ', faSum);
