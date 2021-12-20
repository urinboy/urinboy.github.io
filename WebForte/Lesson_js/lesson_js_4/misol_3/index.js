/* ** Misol #3** */

function svetafor() {
// Svetafor chirog'i rangi
        var color = document.getElementById("color").value.toString();
        var text;
    if(color === "qizil" || color === "red"){
            text = "Qizil chiroq yondi. TO'XTANG!";
            document.getElementById("qizil").style.backgroundColor = "red";
            document.getElementById("sariq").style.backgroundColor = "";
            document.getElementById("yashil").style.backgroundColor = "";
    }else if(color === "sariq" || color === "yellow"){
            text = "Sariq chiroq yondi. TAYYORLANING!";
            document.getElementById("msg").style.color = "yellow";
            document.getElementById("qizil").style.backgroundColor = "";
            document.getElementById("sariq").style.backgroundColor = "yellow";
            document.getElementById("yashil").style.backgroundColor = "";
    }else if(color === "yashil" || color === "green"){           
            text = "Yashil chiroq yondi. YURSANGIZ BO'LADI!";
            document.getElementById("msg").style.color = "green";
            document.getElementById("qizil").style.backgroundColor = "";
            document.getElementById("sariq").style.backgroundColor  = "";
            document.getElementById("yashil").style.backgroundColor = "green";
     } else {
         text = "Bunaqa chiroq svetaforda mavjud emas!";  
    }
    document.getElementById("msg").innerHTML = text;
}