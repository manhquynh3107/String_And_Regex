<?php

function checkValidateAccount ($acc){
    $regexp = '/^[_a-z0-9]{6,}$/';

    if (preg_match_all($regexp,$acc)){
        echo "Tai Khoan Hop Le";
    }else{
        echo "Tai Khoan Khong Hop Le";
    }
}

echo "<pre>";
checkValidateAccount("123abc_");
echo "<br>";
checkValidateAccount("_123abc");
echo "<br>";
checkValidateAccount("___");
echo "<br>";
checkValidateAccount("123_");
echo "<br>";
checkValidateAccount("abc_");
echo "<br>";
checkValidateAccount("123");
echo "<br>";
checkValidateAccount("abc");
echo "<br>";
checkValidateAccount("@");
echo "<br>";
checkValidateAccount("_123");
echo "<br>";
checkValidateAccount("_asd");
echo "<br>";
