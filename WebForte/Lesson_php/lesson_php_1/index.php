<!-- === UrinboyDev | TUORMedia.uz === -->
<!-- === 02.02.2022 === -->

<?php
echo "Assalomu alaykum WebForte Academiyasi!";
// Birinchi masala :

$birinchi_son = 23;
$ikkinchi_son = 32;
$uchinchi_son = 47;

$orta_arifmetigi = ($birinchi_son + $ikkinchi_son + $uchinchi_son)/3;
echo "<br><br><b>1-masala:</b> <br>a = ".$birinchi_son.", b = ".$ikkinchi_son.", c = ".$uchinchi_son;
echo "<br>"."0`rta arifmetik = ".$orta_arifmetigi;

// Ikkinchi masala:

$kv_a = 16;
$peremetr = 4 * $kv_a;
$yuzi = $kv_a * $kv_a;

echo "<br><br><b>2-masala: </b> <br> Kvadrat tomoni a = ".$kv_a;
echo "<br>Peremetri = ".$peremetr.", Yuzi = ".$yuzi;

// Uchinchi masala:

$tt_a = 6;
$tt_b = 9;
$tperemetr = 2 * ($tt_a + $tt_b);
$tyuzi = $tt_a * $tt_b;

echo "<br><br><b>3-masala: </b> <br> To`g`ri to`rtburchakning tomoni a = ".$tt_a.", b = ".$tt_b;
echo "<br>Peremetri = ".$tperemetr.", Yuzi = ".$tyuzi;

// To`rtinchi masala:

$tezlik = 12;
$vaqt = 3;
$yol = $tezlik * $vaqt;
echo "<br><br><b>4-masala: </b> <br> Mashinaning tezligi = ".$tezlik.", vaqti = ".$vaqt;
echo "<br>Yo`l = ".$yol;


// Beshinchi masala:

$u_a = 3;
$u_b = 4;
$u_c = 5;
$uperemetr = $u_a + $u_b + $u_c;
echo "<br><br><b>5-masala: </b> <br> Uchburchakning tomonlari a = ".$u_a.", b = ".$u_b.", c = ".$u_c;
echo "<br>Peremetri = ".$uperemetr;

// Oltinchi masala:

$a_son = 4;
$b_son = 15;
echo "<br><br><b>6-masala: </b> <br> Berilgan sonlar a = ".$a_son.", b = ".$b_son.", <b>a > 2 va b < 10</b> = ";
var_dump(($a_son > 2) && ($b_son < 10));

// Yettinchi masala:

$c_son = 23;
echo "<br><br><b>7-masala:</b><br> Berilgan sonlar a = ".$a_son.", b = ".$b_son.", c = ".$c_son.", <b>a < b < c</b> = ";
var_dump(($a_son < $b_son) && ($b_son < $c_son));

// Sakkizinchi masala:

echo "<br><br><b>8-masala: </b> <br> Berilgan sonlar a = ".$a_son.", b = ".$b_son.", <b>a va b sonlari toq sonlar</b> = ";
var_dump(($a_son%2 == 1) && ($b_son%2 == 1));

// To`qqizinchi masala:

echo "<br><br><b>9-masala: </b> <br> Berilgan sonlar a = ".$a_son.",  <b>a soni juft son</b> = ";
var_dump($a_son%2 == 0);

// O`ninchi masala:

echo "<br><br><b>10-masala: </b> <br> Berilgan sonlar a = ".$b_son.",  <b>a soni ikki xonali son</b> = ";
var_dump($b_son > 9);
