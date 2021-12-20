/* ** Misol #5 ** */

function rhisob() {
    var N = parseInt(document.getElementById("N").value);

    function sum(num) {
        if (num > 0) {
            return num + sum(num - 1);
        } else {
            return num;
        }
    }


    document.getElementById("msg").innerHTML = "1 dan " + N + " gacha bo'lgan sonlar yig'indisi = " + sum(N);

}