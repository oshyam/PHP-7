<?php

function readLines($filename){
    $file = fopen($filename,'r');
    $i=0;
    while(($line =  fgets($file))!==false){
        $key=$i;
        yield $key=>$line;
        $i++;
    }
    fclose($file);
}

foreach(readLines('testFile.txt') as $key =>$line){
    echo $key.'-'.$line.'<br/>';
}

?>