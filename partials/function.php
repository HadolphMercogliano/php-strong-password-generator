<?php

function RandomPswGen($pswLength) {
    $charList = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ$#@&%!?';
    $RandomPsw = "";
    for ($i = 0; $i < $pswLength; $i++) {
        $RandomPsw .= $charList[rand(0, strlen($charList) - 1)];
    }
    return $RandomPsw;
};

?>