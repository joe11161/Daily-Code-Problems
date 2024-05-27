<?php
/* This problem was asked by Google.

Given two strings A and B, return whether or not A can be shifted some number of times to get B.

For example, if A is abcde and B is cdeab, return true. If A is abc and B is acb, return false.*/

//solution A
function stringtoArray($delimiter, $string,$compare) {
  $array =explode($delimiter, $string);
  $len = count($array);
  switch (true){
    	case ($len === 0):
        	echo "Please add a string";
         break;
     case ($len >= 2):              
         if($len === 2){
         	 $val1 = [$array[1], $array[0]];
           $val2 = implode($val1);         
           $test = ($val2==$compare)? true :false;           
           return $test;
         }
    }
 }


//solution B

class stringToArray{
    public $string;
    public $delimiter;
    public $compare;
    public function __construct($string, $delimiter, $compare){
        $this->string = $string;
        $this->delimiter = $delimiter;
        $this->compare = $compare;

        $array =explode($delimiter, $string);
    $len = count($array);
    switch (true){
     case ($len === 0):
        echo "Please add a string";
        break;
      case ($len >= 2):              
         if($len === 2){
         	 $val1 = [$array[1], $array[0]];
           $val2 = implode($val1);         
           $test = ($val2==$compare)? true :false;
           var_dump($test);       
         }      
     }
    }
}

$string1= "ab,cde";
$string2= "a,bc";
$delimiter = ",";
$compare1= "cdeab";
$compare2= "acb";
new stringToArray($string1, $delimiter, $compare1);
var_dump(stringtoArray($delimiter, $string2, $compare2));

