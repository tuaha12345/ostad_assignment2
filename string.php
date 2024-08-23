<?php

function array_input($array){
    $array_length=count($array);
    for($i=0;$i<$array_length;$i++){
        //echo $array[$i];
        $string=$array[$i];
        $reverse_string=strrev($string);
        $vowel_a=substr_count($string,'a');
        $vowel_e=substr_count($string,'e');
        $vowel_i=substr_count($string,'i');
        $vowel_o=substr_count($string,'o');
        $vowel_u=substr_count($string,'u');

        $vowel_A=substr_count($string,'A');
        $vowel_E=substr_count($string,'E');
        $vowel_I=substr_count($string,'I');
        $vowel_O=substr_count($string,'O');
        $vowel_U=substr_count($string,'U');

        $total_vowel_counted=($vowel_a+$vowel_e+$vowel_i+$vowel_o+$vowel_u+$vowel_A+$vowel_E+$vowel_I+$vowel_O+$vowel_U);
        //echo "Original String: {$string}, Vowel Count: {$total_vowel_counted}";
        echo "Original String: {$string}, Vowel Count: {$total_vowel_counted}, Reversed String: {$reverse_string}";
        echo PHP_EOL;

    }
   // echo $array_length;
    //return $array;
}

// $input = trim(fgets(STDIN));

// $array = explode(' ', $input);

// array_input($array)

$strings=["Hello", "World", "PHP", "Programming"];
array_input($strings);


?>