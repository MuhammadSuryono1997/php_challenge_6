<?php

function KebabCase($string)
{
    $pisahkan = function($str){return explode(' ',$str);};
    return join("-",$pisahkan($string));
}

$hello = KebabCase("hello world again");
print($hello."\n");

?>