<?php

    $numbers = [10,3,7,15];
    $operands = [10,3,7,15];
    $K = 17;
    foreach($numbers as $number){
       foreach($operands as $operand){
           
           $result = $number+$operand;
           
           if($result==$k){
              
              $result = true;
              
           }
           else{
              $result = false;
           }
           
       }
    }
   
