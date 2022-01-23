/* ** Misol #3** */

function taqqoslash() {
    let str = document.querySelector('#str').value;
    let natija = document.querySelector("#natija");



    natija.innerHTML = teskariMatn(str);
    //consolga natijani chiqarish
    console.log(teskariMatn(str));


    // Matnni teskskari yozuvchi funksiya
    function teskariMatn(str) {
        if (str === "")
            return "";

        else
            return teskariMatn(str.substr(1)) + str.charAt(0);
    }
}