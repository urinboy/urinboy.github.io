/* ** Misol #4** */

var a = parseInt(prompt("a sonini kiriting"));
console.log('2.2.4 - misol: a = ', a);

if(a > 0){
    if(a % 2 ===  0){
        console.log('Musbat juft son');
    }else if(a % 2 === 1){
        console.log('Musbat toq son');
    }
}else if(a === 0){
    console.log('Son nolga teng!');
}else{
    if(Math.abs(a) % 2 ===  0){
        console.log('Manfiy juft son');
    }else if(Math.abs(a) % 2 === 1){
        console.log('Manfiy toq son');
    }
}