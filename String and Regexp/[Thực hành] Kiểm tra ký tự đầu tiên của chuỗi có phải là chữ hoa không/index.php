<?php
function isFirstLetterUpperCase($str){
    $regexp = '^/[A-Z]/^';

    if (preg_match($regexp,$str)){
        echo("String's first character is uppercase");
    } else {
        echo("String's first character is not uppercase");
    }
}

//echo "<pre>";
//isFirstLetterUpperCase('Codegym');
//echo "<br>";
//isFirstLetterUpperCase('Codegym');

echo"<pre>";
isFirstLetterUpperCase('Dao Manh Quynh');
echo "<br>";
isFirstLetterUpperCase('Dao manh Quynh');
echo "<br>";
isFirstLetterUpperCase('dao manh quynh');


