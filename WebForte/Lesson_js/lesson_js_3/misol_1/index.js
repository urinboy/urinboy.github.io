/* ** Misol #1** */

var N = parseInt(prompt("N sonini kiriting"));
console.log('3.1 - misol: N = ', N);
var sum = 0;
for(var i = 1; i < N; i++){
    if(i%2 === 1){
        // console.log('i = ', i);
        sum += i;
    }
}
console.log('Toq sonlar yig`indisi: ', sum);