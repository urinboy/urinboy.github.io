/* ** Misol #2** */

function taqqoslash() {
    let a = parseInt(document.querySelector('#a').value);
    let b = parseInt(document.querySelector('#b').value);
    let natija = document.querySelector("#natija");
    let text = "";
    //eng kattasini aniqlovchi funksiya
    MAX(a, b);

    function MAX(a, b) {
        if (a > b) {
            text = `a = ${a}`;
        } else {
            text = `b = ${b}`;
        }
        natija.innerHTML = text;
    }

}