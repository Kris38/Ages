<?php
/**
 * Created by PhpStorm.
 * User: kris
 * Date: 04/09/17
 * Time: 17:12
 */
//array
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

// Age total

    $Nombres = func_get_args($students);
    $Nb = sizeof($Nombres);
    $Somme = 0;
    foreach ($Nombres as $Valeur)
    {
        $Somme += $Valeur;
    }
    echo ($Somme / $Nb);
