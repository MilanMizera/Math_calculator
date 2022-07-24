<?php

if (isset($_POST['submit'])) {

$num1=$_POST['number1'];
$num2=$_POST['number2'];

 if(is_numeric('$num1') && is_numeric('$num2')) 
 {
   $result = 'neznamy';

    if(isset($_POST['g'])) 
    {
   
   $operation=$_POST['g'];
   
   switch ($operation) {

    case '+' ;
    $result=$num1+$num2;
    break;

    case '-' ;
    $result= $num1-$num2;
    break;

    case '*' ;
    $result= $num1*$num2;
    break;

    case '/' ;
    $result= $num1/$num2;
    break;

   }

    }

    else 
    {
      echo "Prosím, vyberte matematický symbol.";
    }
 }
else 
 {
echo "Prosím,uveďte pouze čísla.";
 }
 }