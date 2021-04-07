<?php $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    $rS='';
    for ($i = 0; $i < 7; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    $r=$randomString;

    for ($i = 0; $i < 7; $i++) {
        $in = rand(0, strlen($characters) - 1);
        $rS .= $characters[$in];
    }
    $p=$rS;
?>