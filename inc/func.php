<?php

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    return $data;
}


function br($times =1){
    for($i = 1; $i<=$times; $i++){
        echo '<br/>';
    }
}

function super_encrypt($string)
{
    $salt = md5('I love programming. It is the best. ');
    $salt2 = sha1('Hey what is up? I hope all is good.');
    $string = sha1($salt.md5(md5($salt .$string.$salt2).$salt2));

    return $string;
}
//echo super_encrypt('');

function cleanDate($date){
    $no_zero = str_replace('*0', '', $date);
    $fully_clean = str_replace('*', '', $no_zero);

    return $fully_clean;
}

function date_now(){
    $timestamp_format = strftime('%b *%d, %G %I:%M:%S %p', time());
    $cleaned_date = cleanDate($timestamp_format);
    
    return $cleaned_date;
}


?>