/* ** Misol #1** */


let slider = document.querySelector("#myRange");

let matn = document.querySelector(".font");
matn.style.fontSize= slider.value;

let output = document.querySelector("#fontSize");
output.innerHTML = slider.value;

slider.oninput = function() {
    matn.style.fontSize = this.value;
    output.innerHTML = this.value;
}



// function hisoblash() {
//     let a = parseInt(document.querySelector('#a').value);
//     let b = parseInt(document.querySelector('#b').value);
//     let c = parseInt(document.querySelector('#c').value);
//     let natija = document.querySelector("#natija");
//     let text = "";
//     let x1 = 0;
//     let x2 = 0;

//     KV(a, b, c);

//     function D(a, b, c) {
//         let Disc = Math.pow(b, 2) - 4 * a * c;
//         return Disc;
//     }

//     function KV() {
//         if (D(a, b, c) < 0) {
//             text = "Ildizi mavjud emas! <br>D = " + D(a, b, c);
//         } else if (D(a, b, c) === 0) {
//             x1 = (-b + Math.sqrt(D(a, b, c))) / (2 * a);
//             x2 = (-b - Math.sqrt(D(a, b, c))) / (2 * a);
//             if (x1 === x2)
//                 text = `x = ${x1},  D = ${D(a,b,c)}`;
//             else
//                 text = `x1 = ${x1}, x2 = ${x2}, <br>D = ${D(a,b,c)}`;
//         } else {
//             x1 = (-b + Math.sqrt(D(a, b, c))) / (2 * a);
//             x2 = (-b - Math.sqrt(D(a, b, c))) / (2 * a);
//             text = `x1 = ${x1}, x2 = ${x2}, <br>D = ${D(a,b,c)}`;
//         }
//         natija.innerHTML = text;
//     }

// }