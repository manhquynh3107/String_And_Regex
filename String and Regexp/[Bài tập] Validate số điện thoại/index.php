<?php

function checkValidateNumberPhone($phonenumber){
    $pattern = "/^[(]+[0-9]{2}+[)]+[-]+[(]+[0]{1}+[0-9]{9}+[)]$/";
    if (preg_match_all($pattern,$phonenumber)){
        echo "So Dien Thoai Nhap Vao Da Hop Le";
    }else{
        echo "So Dien Thoai Nhap Vao Khong Hop Le";
    }
}

echo "<pre>";
checkValidateNumberPhone("(84)-(0978489609)");
echo "<br>";
checkValidateNumberPhone("(a8)-(22222222)");

?>