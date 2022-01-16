/* ** Misol #4** */

// Kiritish uchun
function kiritish(num){
    document.form.display_calc.value = document.form.display_calc.value + num; 
}

// Natijani ekranga chiqarish
function natija() {
    let exp = document.form.display_calc.value;
    if (exp) {
        document.form.display_calc.value = eval(exp);
    }
}

// Tozalash uchun

function tozalash() {
    document.form.display_calc.value = "";    
}

// Bittalab o'chirish uchun
function ochirish() {
    let exp = document.form.display_calc.value;
    document.form.display_calc.value = exp.substring(0,exp.length - 1);        
}

// Ildiz chiqarish
function ildiz() {
    let exp = document.form.display_calc.value;
    document.form.display_calc.value = Math.sqrt(exp);
}

// Kvadrat chiqarish
function kvadrat() {
    let exp = document.form.display_calc.value;
    document.form.display_calc.value = Math.pow(exp, 2);
}