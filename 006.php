<?php

function TrimContent($content, $length)
{
    return substr(strip_tags($content), 0, $length)."...";
}

$tulisan = TrimContent("ini adalah tulisan yang sangat panjang",8);
echo $tulisan;


?>