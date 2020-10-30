<?php
function isFirstLetterCase($str){
    $regex='/^[A-Z]/';
    if (preg_match($regex,$str)){
        echo "String's first character is uppercase ";
    }else{
        echo "String's first character not is uppercase ";
    }
}
isFirstLetterCase("nguyen van Nam");
echo "<br>";
echo "<br>";
isFirstLetterCase("NGUYEN VAN NAM");
echo "<br>";
echo "<br>";
isFirstLetterCase("nguyen van Nam");