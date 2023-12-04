<?php

function myNumber (){
    static $qut = 3 ;
    echo $qut;
    $qut+=1;
}
myNumber();
myNumber();
myNumber();
?>