<?php
function Mode($data)
{
    $cg = function($data){
        $values = array_count_values($data);
        $mode = array_search(max($values), $values);
        return $mode;
    };

    return $cg($data);
}
$numbers = [1,2,3,4,5,6,6,8,8,6,9];
$grades = ["87.5", "88.5", "60.5", "90.5", "88.5"];

echo Mode($numbers)."\n";
echo Mode($grades)."\n";


?>