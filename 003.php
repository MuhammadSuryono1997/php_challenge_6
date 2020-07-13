<?php

function KebabCase($string)
{
    $pisahkan = explode(' ',$string);
    return join("-",$pisahkan);
}

$hello = KebabCase("hello world again");
print($hello."\n");

?>