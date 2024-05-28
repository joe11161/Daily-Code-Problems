<?php
$nums = [1,2,3,4,5];
function solA($nums){
	foreach($nums as $num){
    	if(!is_int($num)){
        	return "non_int element";
        }
    }//end_foreach
    //each element is int
  
    foreach($nums as $i=>$num){
    	$prod = 1;
		foreach($nums as $j=>$val){
        	if($i==$j){
            	continue;
            }
            $prod*=$val;
        }
        echo $prod."<br>";
        
    }
}

solA($nums);