/* ** Misol #1** */
var a = 5;
var b = 12;
var misol_1 = (a > 2 && b < 10 );
console.log('1.1-misol: ', 'a = ', a, ', b = ', b, ',  (a > 2 && b < 10) = ', misol_1);

/* ** Misol #2** */
var a_2 = 16;
var b_2 = 23;
var c_2 = 34;
var misol_2 = (a_2 < b_2 && b_2 < c_2 );
console.log('1.2-misol: ',  'a = ', a_2, ', b = ', b_2, ', c = ', c_2, ',  (a < b && b < c) = ', misol_2);

/* ** Misol #3** */
var a_3 = 7;
var b_3 = 5;
var misol_3 = (a_3 % 2 ==  1 && b_3 % 2 == 1);
console.log('1.3-misol: ',  'a = ', a_2, ', b = ', b_2, ',  (a % 2 ==  1 && b % 2 == 1) = ', misol_3);

/* ** Misol #4** */
var a_4 = 22;
var misol_4 = (a_4 % 2 == 0);
console.log('1.4-misol: ',  'v = ', a_4, ', (a % 2 == 0) = :', misol_4);

/* ** Misol #5** */
var a_5 = 9;
var misol_5 = (a_5 > 9 || a_5 < -9);
console.log('1.5-misol: ', 'a = ', a_5, ',  (a > 9 || a > -9) = ', misol_5);

/* 
*  IF ELSE bo’yicha masalalar:
*  Misol #1
*/
var a_if_1 = 12;
var aBosh = a_if_1;
if(a_if_1 > 0){
    a_if_1++;
}else{
    a_if_1 *= 10;
}
console.log('2.1 - misol: a = ', aBosh, ',  natijasi = ', a_if_1 );

/* 
* Misaol # 2
*
*/
var a_if_2 = 27;
var b_if_2 = 38;
if(a_if_2 > b_if_2){
    console.log('2.2 - misol: a = ', a_if_2, ', b = ', b_if_2, ',  Kattasi: a = ', a_if_2 );
}else{
    console.log('2.2 - misol: a = ', a_if_2, ', b = ', b_if_2, ',  Kattasi: b = ', b_if_2 );
}

/* 
* Misaol # 3
*
*/
var a_if_3 = 27;
var b_if_3 = 38;
var c_if_3 = 58;
console.log('2.3 - misol: a = ', a_if_3, ', b = ', b_if_3, ',  c = ', c_if_3 );

if(a_if_2 < b_if_3 && a_if_2 < c_if_3){
    console.log('a = ', a_if_3);
}else if(b_if_3 < a_if_3 && b_if_3 < c_if_3){
    console.log('b = ', b_if_3);
}else{
    console.log('c = ', c_if_3 );
}

/* 
* Misaol # 4
*
*/
var a_if_4 = parseInt(prompt("a sonini kiriting"));
   console.log('2.4 - misol: a = ', a_if_4);
// if(a_if_4 % 2 == 0){
//         if(a_if_4 > 0){
//             console.log('Musbat juft son');
//         }else{
//             console.log('Manfiy juft son');
//         }
// }else if(a_if_4 % 2 == 1){
//     if(a_if_4 > 0){
//         console.log('Musbat toq son');
//     }else if(a_if_4 < 0){
//         console.log('Manfiy juft son');
//     }
// }else if(a_if_4 === 0){
//     console.log('Son nolga teng');
// }

if(a_if_4 > 0){
    if(a_if_4 % 2 ===  0){
        console.log('Musbat juft son');
    }else if(a_if_4 % 2 === 1){
        console.log('Musbat toq son');
    }
}else if(a_if_4 === 0){
    console.log('Son nolga teng!');
}else{
    if(Math.abs(a_if_4) % 2 ===  0){
        console.log('Manfiy juft son');
    }else if(Math.abs(a_if_4) % 2 === 1){
        console.log('Manfiy toq son');
    }
}