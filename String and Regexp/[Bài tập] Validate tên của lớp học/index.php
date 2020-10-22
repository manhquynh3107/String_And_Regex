<?php

function checkValidateClass($class) {
    $pattern = "/^[C,P,A]{1}[0-9]{4}[G, H, I, K, L, M]{1}[0-9]{1}$/";
    if (preg_match_all($pattern,$class)){
        echo " Tai Khoan Nhap Vao Hop Le";
    }else{
        echo "Tai Khoan Nhap Vao Khong Hop Le";
    }

}

echo "<pre>";
checkValidateClass("C0820H1");
echo "<br>";
checkValidateClass("C0820H1");
echo "<br>";
checkValidateClass("A0820Q1");
echo "<br>";
checkValidateClass("P0820G1");
echo "<br>";
checkValidateClass("C0820K1");
echo "<br>";
checkValidateClass("C0820H1");
echo "<br>";
checkValidateClass("C0820Q1");
echo "<br>";
