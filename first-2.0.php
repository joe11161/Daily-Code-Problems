<?php
	var_dump(result([10, 4, 3, 7], 17));

	function result($nums, $k)
	{
		foreach ($nums as $i => $num) {
			foreach ($nums as $j =>  $value) {
            			if($i == $j){
                        continue;
                        }
            		 $result = $num + $value;
				if($result == $k){
              		return true;
                }
			}
            
		}
		return false;
	}
?>
 
