<?php

function encrypt($plaintext, $key)
{
    $ciphertext = "";
    $length = strlen($plaintext);

    for ($i = 0; $i < $length; $i++) {
        $char = $plaintext[$i];
        if (ctype_alpha($char)) {
            $char = strtoupper($char);
            $char = chr(((ord($char) + $key - 65) % 26) + 65);
        }
        // else{$char +=$key;}
        $ciphertext .= $char;
    }

    return $ciphertext;
}

function decrypt($ciphertext, $key)
{
    $plaintext = "";
    $length = strlen($ciphertext);

    for ($i = 0; $i < $length; $i++) {
        $char = $ciphertext[$i];
        if (ctype_alpha($char)) {
            $char = strtoupper($char);
            $char = chr(((ord($char) - $key - 65 + 26) % 26) + 65);
        }
        // else{$char -=$key;}
        $plaintext .= $char;
    }

    return $plaintext;
}

