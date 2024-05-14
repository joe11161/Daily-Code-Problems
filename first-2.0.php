<?php
// var_dump(solutionB([10, 4, 3, 7], 17));

function solutionB($nums, $k)
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


function solutionA($nums, $k) {
	$count = count($nums);
	foreach ($nums as $i => $num) {
		for($j = $i+1; $j < $count; $j++) {
			$total = $num + $nums[$j];
			if ($k == $total) {
				return true;
			}
		}
		if($i+2 >= $count) {
			break;
		}
	}
	return false;
}


function solutionC($nums, $k) {
	foreach ($nums as $i => $num) {
		$needle = $k - $num;
		if(array_search($needle, $nums)!== false){
			return true;
		}
	}
	return false;
}

// $nums = [10, 4, 3, 7];
// $k = 17;
$nums = range(0, 100000);
$k = $nums[count($nums)-1] + $nums[count($nums)-2];

$time_start = microtime(true);
$result = solutionC($nums, $k);
$time_end = microtime(true);
$timeUsed = $time_end - $time_start;
echo "\n".'solutionC '.$result .' Time: '. number_format($timeUsed,10) . "\n";

$time_start = microtime(true);
$result = solutionA($nums, $k);
$time_end = microtime(true);
$timeUsed = $time_end - $time_start;
echo 'solutionA '.$result .' Time: '. number_format($timeUsed,10) . "\n";


$time_start = microtime(true);
$result = solutionB($nums, $k);
$time_end = microtime(true);
$timeUsed = $time_end - $time_start;
echo 'solutionB '.$result .' Time: '. number_format($timeUsed,10) . "\n";
