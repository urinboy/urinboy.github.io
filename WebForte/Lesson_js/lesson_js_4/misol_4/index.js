/* ** Misol #4** */

function yoshHaqida() {
    // Yosh haqida malumot
var yosh = parseInt(document.getElementById("yosh").value);
var text;
    if(yosh < 18){
        text = "Balog'at yoshiga yetmabsiz!";
    }else if(yosh >= 18 && yosh < 30){
        text = "Hali yosh ekansiz!";
    }else if(yosh >= 30 && yosh < 40){           
        text = "G'ayrat qiling!";
    } else if(yosh >= 40 && yosh < 50){
        text = "Hali hammasi oldinda!";
    }else if(yosh >= 50 && yosh < 70){
        text = "Nevaralardan nechta?";
    }else if (yosh >= 70 && yosh < 80) {
        text = "Pensiya qancha?";
    }else if (yosh >= 80 && yosh < 100) {
        text = "Ehee to'y qachon?";
    }else {
         text = "Bunaqa yoshga qanday erishganzi?";  
    }
    document.getElementById("msg").innerHTML = text;
    console.log(text);
}