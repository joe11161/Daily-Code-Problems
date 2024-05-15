<?php
/*PROBLEM DEFINITION: Given the root of a binary tree, find the most frequent subtree sum. The subtree sum
is the sum of all the values under a node including the node itself. For example given:
(root=>5, left=>2, right=>-5), return 2 as it occurs twice: once as the left leaf and once as the sum of 
(2+-5+5).     5
            /  \
          2    -2     */

var_dump(solutionA(['root'=>5,'left'=>2, 'right'=>-5]));
function solutionA($tree){
    $sum = $tree['left'] + $tree['right'] + $tree['root'];
    $key = array_search($sum, $tree, true);
        if ($key !== false){
            return $tree[$key];
        } 
    return false;
}


