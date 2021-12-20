/* ** Misol #1** */

// Uchburchakning mavjudligini tekshirish
function mavjudlik(a,b,c) {
    var a = parseInt(document.getElementById("a").value);
    var b = parseInt(document.getElementById("b").value);
    var c = parseInt(document.getElementById("c").value);
    var text;
if (a < b + c && b < a + c && c < a + b) {
        text = "Uchburchak bo'la oladi!";
    } else {
        text = "Uchburchak bo'la olmaydi!";
    }
    document.getElementById("misol").innerHTML = text;
}
// uchburchakning peremetri
function peremetr() {
    var a = parseInt(document.getElementById("a").value);
    var b = parseInt(document.getElementById("b").value);
    var c = parseInt(document.getElementById("c").value);
    var text;
    if(a < b + c && b < a + c && c < a + b){
        var p = (a + b + c);
        text = "Uchburchakning peremetri : " + p;
    }else{
        text =  "Uchburchak bo'la olmaydi!";   
    }
    document.getElementById("misol").innerHTML = text;
}
// uchburchakning yuzasi
function yuzasi(){
    var a = parseInt(document.getElementById("a").value);
    var b = parseInt(document.getElementById("b").value);
    var c = parseInt(document.getElementById("c").value);
    var text;
    if(a < b + c && b < a + c && c < a + b){
        var p = (a + b + c)/2;
        var S = Math.sqrt( p * ( p - a ) * ( p - b ) * ( p - c ) );
        text =  "Uchburchakning yuzasi : " + S;
    }else{
        text =  "Uchburchak bo'la olmaydi!";   
    }
    document.getElementById("misol").innerHTML = text;
}
// to'g'ri burchakli uchburchakka tekshirish
function togriburchak() {
    var a = parseInt(document.getElementById("a").value);
    var b = parseInt(document.getElementById("b").value);
    var c = parseInt(document.getElementById("c").value);
    var text;
    if(!(a < b + c && b < a + c && c < a + b)){
        text =  "Uchburchak bo'la olmaydi!";   
    }else if ((Math.pow(a,2) === Math.pow(b,2) + Math.pow(c,2)) || (Math.pow(b,2) === Math.pow(a,2) + Math.pow(c,2)) || (Math.pow(c,2) === Math.pow(a,2) + Math.pow(b,2)) ){
        text =  "To'g'ri burchakli uchburchak bo'ladi!";   
    }else{
        text =  "To'g'ri burchakli uchburchak emas!";   
    }
    document.getElementById("misol").innerHTML = text;
}
