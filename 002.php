<?php

function SnakeCase($string)
{
    $pisahkan = function($string){return explode(' ',$string);};
    return join("_",$pisahkan($string));
}

$hello = SnakeCase("hello world again");
print($hello."\n");

?>