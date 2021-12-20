/* ** Misol #1** */
let sonlar = [1, 2, 5, 77, 54, 3, 2, 1, 17, 23];
let sum = 0;
for (let i = 0; i < sonlar.length; i++) {
    sum += sonlar[i];
}
document.getElementById("msg").innerHTML = "Massiv elementlari yig'indisi = " + sum;

console.log('natija: ', sum);