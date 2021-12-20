/* ** Misol #5** */

var a = parseInt(prompt("a sonini kiriting"));
var b = parseInt(prompt("b sonini kiriting"));
var c = parseInt(prompt("c sonini kiriting"));
console.log('2.2.5 - misol: a = ', a, ', b = ', b, ', c = ', c,);
var D = Math.pow(b, 2) + 4*a*c;
    console.log('D = ', D);
    var x_1 = 0, x_2 = 0;
if(D > 0){
    x_1 = (-b + Math.sqrt(D))/(2*a);
    x_2 = (-b + Math.sqrt(D))/(2*a);
    console.log('x_1 = ', x_1, ', x_2 = ', x_2);
}else if(D === 0){
    x_1=x_2=(-b)/(2*a);
    console.log('x_1 = ', x_1, ', x_2 = ', x_2);
}else if(D < 0){
    console.log('Kvadrat tenglamaning yechimlari mavjud emas!');
}
