<?php

$arr = array_map(function($v){
    return sprintf("inter", $v);
    }, range(1, 101));

$count = array_count_values($arr);

echo $count;

