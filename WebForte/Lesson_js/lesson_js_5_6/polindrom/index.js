/* ** Polindrome ** */

function polindrome() {

    function palindromTekshiruvi(str) {

        // qatorni massivga aylantirish
        const massiv = string.split('');

        // massiv qiymatlarini o'zgartirish
        const massivAlmashgani = massiv.reverse();

        // massivni satrga aylantirish
        const teskariMatn = massivAlmashgani.join('');

        if (string == teskariMatn) {
            document.getElementById("msg").innerHTML = "Polindrom!";
            console.log('Polindrom!');
        } else {
            document.getElementById("msg").innerHTML = "Polindrom emas!";
            console.log('Polindrom emas!');
        }
    }

    const string = document.getElementById("string").value;
    //take input
    // const string = prompt('Enter a string: ');

    return palindromTekshiruvi(string);
}