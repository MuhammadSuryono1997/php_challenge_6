<?php

$TrimWords = function($content, $length)
{
    $content = explode(" ", $content);
    $output = array_slice($content, 0, $length);
    return join(" ", $output);
};

$tulisan = $TrimWords("ini adalah tulisan yang sangat panjang",3);
echo $tulisan;
?>