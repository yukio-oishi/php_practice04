<?php 

function product($arr){
    $result = $arr[0]; 
    foreach ($arr as $a) {
            $result *= $a;
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9));
?>