/* ** Misol #2** */

// Kvadrat tenglamani hisoblovchi! (y=ax^2+bx+c)


function Diskiriniment() {
        var a = parseInt(document.getElementById("a").value);
        var b = parseInt(document.getElementById("b").value);
        var c = parseInt(document.getElementById("c").value);
        var D = 0;
        D = Math.pow(b, 2) - 4*a*c;
        document.getElementById("misol").innerHTML = "Diskriminant = " + D;
        return D;
}

function hisoblash() {
        var a = parseInt(document.getElementById("a").value);
        var b = parseInt(document.getElementById("b").value);
        var c = parseInt(document.getElementById("c").value);

        var D = Diskiriniment();
        console.log(D);
        var x_1 = 0, x_2 = 0;
        if(D > 0){
                x_1 = (-b + Math.sqrt(D))/(2*a);
                x_2 = (-b - Math.sqrt(D))/(2*a);
              return   document.getElementById("misol").innerHTML = 'D = '+ D +' > 0 : <br> x_1 = '+ x_1+', <br> x_2 = '+x_2;
        }else if(D === 0){
                x_1=x_2=(-b)/(2*a);
               return document.getElementById("misol").innerHTML = 'D  = '+ D +' = 0 : <br> x_1 = '+ x_1+', x_2 = '+x_2;
        }else if(D < 0){
               return document.getElementById("misol").innerHTML = "D = "+ D +" < 0 : Kvadrat tenglamaning yechimlari mavjud emas!";
        }

}