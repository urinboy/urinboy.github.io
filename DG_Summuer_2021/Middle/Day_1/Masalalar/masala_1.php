<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$arrlength = count($arr);
$arr2 = array();
for ($i = 0; $i < $arrlength; $i++){
    if($arr[$i]%2 == 1){
        $arr2[$i] = $arr[$i];
    }else{
        continue;
    }
}
echo  $arr2;