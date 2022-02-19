<!-- === UrinboyDev | TUORMedia.uz === -->
<!-- === 02.02.2022 === -->

<?php
echo "Assalomu alaykum WebForte Academiyasi!<br><br><b>Bu If else masalalari:</b>";

// Birinchi masala :

$a_son = 4;
echo "<br><br><b>1-masala:</b> <br>a = ".$a_son.", agar shu son musbat bo’lsa unga 1 qo’shilsin , agar manfiy bo’lsa 10 ga ko’paytirilsin";

if ($a_son > 0){
    $a_son++;
}else{
    $a_son *= 10;
}
echo "<br>"."Natija = ".$a_son;

// Ikkinchi masala :

$b_son = 9;
echo "<br><br><b>2-masala:</b> <br>a = ".$a_son.", b = ".$b_son.", shularning kattasini aniqlash";
echo "<br>"."Kattasi = ";
if ($a_son > $b_son){
    echo $a_son;
}else{
    echo $b_son;
}

// Uchinchi masala :

$c_son = 34;
echo "<br><br><b>3-masala:</b> <br>a = ".$b_son.", b = ".$a_son.", c = ".$c_son.", shularning eng kichigini aniqlash";
echo "<br>"."Eng kichigi = ";
if (($a_son > $b_son) && ($b_son < $c_son)){
    echo $b_son;
}else if (($a_son > $c_son) && ($b_son > $c_son)){
    echo $c_son;
}elseif (($a_son < $b_son) && ($a_son < $c_son)){
    echo $a_son;
}

// To'rtinchi masala :

echo "<br><br><b>4-masala:</b> <br>a = ".$a_son.", Berilgan sonni “musbat toq son”, ‘manfiy juft son’, ‘son nolga teng’ va h.kni aniqlash";
echo "<br>"."Natija = ";
if($a_son > 0){
    if($a_son % 2 == 0){
        echo "Musbat juft son";
    }else if($a_son % 2 == 1){
        echo "Musbat toq son";
    }
}else if($a_son == 0){
    echo "Son nolga teng!";
}else{
    if(($a_son < 0) && ($a_son % 2 ==  0)){
        echo "Manfiy juft son";
    }else if(($a_son < 0) && ($a_son % 2 == 1)){
        echo "Manfiy toq son";
    }
}

// Beshinchi masala :

echo "<br><br><b>5-masala:</b> <br>a = ".$a_son.", Berilgan sonni “musbat toq son”, ‘manfiy juft son’, ‘son nolga teng’ va h.kni aniqlash";
echo "<br>"."Natija = ";
if(($a_son > 1) && ($a_son < 999)){
    if($a_son % 2 == 0){
        echo "Musbat juft son";
    }else if($a_son % 2 == 1){
        echo "Musbat toq son";
    }
}else if($a_son == 0){
    echo "Son nolga teng!";
}else{
    if(($a_son < 0) && ($a_son % 2 ==  0)){
        echo "Manfiy juft son";
    }else if(($a_son < 0) && ($a_son % 2 == 1)){
        echo "Manfiy toq son";
    }
}