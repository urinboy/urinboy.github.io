/* ** Misol #5** */

var a = parseInt(prompt("a sonini kiriting"));
console.log('2.2.5 - misol: a = ', a);

if(a > 9 && a < 100){
    if(a % 2 ===  0){
        console.log('Ikki xonali juft son');
    }else if(a % 2 === 1){
        console.log('Ikki xonali toq son');
    }
}else if(a > 99 && a <= 999){
    if(a % 2 ===  0){
        console.log('Uch xonali juft son');
    }else if(a % 2 === 1){
        console.log('Uch xonali toq son');
    }
}else if(a>0 && a < 10){
    if(a % 2 ===  0){
        console.log('Juft son');
    }else if(a % 2 === 1){
        console.log('Toq son');
    }
}else{
    console.log('Bu son 1-999 oraliqda berilmagan!');
}