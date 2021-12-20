/* ** Misol #3** */

var a = parseInt(prompt("a sonini kiriting"));
var b = parseInt(prompt("b sonini kiriting"));
var c = parseInt(prompt("b sonini kiriting"));
console.log('2.2.3 - misol: a = ', a, ', b = ', b, ',  c = ', c);

if(a < b && a < c){
    console.log('a = ', a);
}else if(b < a && b < c){
    console.log('b = ', b);
}else{
    console.log('c = ', c );
}
