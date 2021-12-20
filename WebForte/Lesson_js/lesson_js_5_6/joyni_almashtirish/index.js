/* ** Joy almashtirish ** */

function almashtirish() {
    let a = parseInt(document.getElementById("a").value);
    let b = parseInt(document.getElementById("b").value);
    let c = a;
    a = b;
    b = c;
    console.log('a = ', a);
    console.log('b = ', b);
    return document.getElementById("msg").innerHTML = "a = " + a + ", b = " + b;

}