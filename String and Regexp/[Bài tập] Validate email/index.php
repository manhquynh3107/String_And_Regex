<?php

function checkValidateEmail ($email){
    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match_all($regexp,$email)){
        echo "Email Hop Le";
    }else{
        echo "Email Khong Hop Le";
    }
}

echo "<pre>";
checkValidateEmail("a@gmail.com");
echo "<br>";
checkValidateEmail("manhquynh3107@gmail.com");
echo "<br>";
checkValidateEmail("@gmail.com");
echo "<br>";
checkValidateEmail("***@gmail.com");
echo "<br>";
checkValidateEmail("1002@gmail.commm");