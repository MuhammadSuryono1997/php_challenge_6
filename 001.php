<?php

function Capitalize($string)
{
    $awal = range('a','z');
    $hasil = range('A','Z');
    $pisahkan = explode(' ',$string);
    $merge = [];
    for($i=0; $i<count($pisahkan); $i++)
    {
        $res = str_replace($awal, $hasil, $pisahkan[$i][0]);
        $subst = substr($pisahkan[$i], 1);
        $res .= $subst;
        array_push($merge, $res);
    }
    return join(" ", $merge);
}

$hello = Capitalize("hello world again");
print($hello);

?>