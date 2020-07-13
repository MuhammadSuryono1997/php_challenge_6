<?php

function SnakeCase($string)
{
    $pisahkan = explode(' ',$string);
    return join("_",$pisahkan);
}

$hello = SnakeCase("hello world again");
print($hello."\n");
// var_dump($hello);

?>