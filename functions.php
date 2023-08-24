<?php

function generatePassword($length){

    $chartactersDb = 'abcdefghilmnopqrstuvwxyz0123456789';
    $password = '';

    for($i = 0; $i < $length; $i++) {
        $randomCharacter = $chartactersDb[rand(0, strlen($chartactersDb) - 1)];
        // var_dump($randomCharacter);

        $password .= $randomCharacter;
    }

    return $password;
}

