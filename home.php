<?php
//  echo '<h1>This is home component</h1>'
    /*$name ="MD.PARVEZ AHAMED";
    $fatherName = "Nazim uddin";
    $motherName = "Parvin";
    $bornYear = 1995;*/


    // echo "My name is" .$name." My favrouite sub is".$sub;
    //echo "My name is".$name."My father name is".$fatherName."My Mother Name is".$motherName
?>

<?php

/**
 * PHP Variable scope types 3
 * 1 local
 * 2 global
 * 3 stactic
 * 
 * function are 2 type 1 is Built in function 2 is user define function
 * 
 * function greating (){
 * 
 *  echo "Hello world"
 * }
 * 
 * 
 */
//Global scope
/* $friedName = "Alam";

 echo $friedName ;

 function address (){
    $village = "Eatavara";//local scope
    echo $village;
 }
address()*/
//global
$cell = 123456789;

function address (){
    // global $cell;
    // 
   echo $GLOBALS['cell'];
}
address();
?>