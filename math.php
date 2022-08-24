<?php
$result = null;
if (isset($_POST['submit']))
{
   $num1= htmlspecialchars($_POST['number1']);
   $num2= htmlspecialchars($_POST['number2']);

   $result = 'Vyplńte všechna pole pouze číslem';

   $num1=str_replace(",",".",$num1);
   $num2=str_replace(",",".",$num2);

   if(is_numeric($num1) && is_numeric($num2)) 
   {
      if(isset($_POST['g'])) 
      {
       $operation=$_POST['g'];
   
       switch ($operation) 
        {

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
    }

}