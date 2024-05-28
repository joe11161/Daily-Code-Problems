<?php

/*Write a function to flatten a nested dictionary. Namespace the keys with a period.

For example, given the following dictionary:

{
    "key": 3,
    "foo": {
        "a": 5,
        "bar": {
            "baz": 8
        }
    }
}
it should become:

{
    "key": 3,
    "foo.a": 5,
    "foo.bar.baz": 8
}
You can assume keys do not contain dots in them, i.e. no clobbering will occur.*/


/*function should check if an element in the array is an array. 
        <--steps-->
    0.  if true it should check if the elements in the nested array are arrays
    1.  if the element is not an array ->combine the first_nested_array_key and
        element_key to be a common namespaced key for that element.
    2.  if the element is an array it should repeat the whole of step 1
*/

function nester($dictionary) {
    $delimiter = '.';
        if(!is_array($dictionary)){
            return "invalid input!";
        }
        foreach($dictionary as $key => $value){
            if(is_array($value)){
                foreach($value as $i => $element){
                    if(is_array($element)){
                       foreach($element as $k => $v){
                        $newkey = [$key,$i,$k];
                        $key = implode($delimiter, $newkey);
                        $array3 = [$key => $v];
                       }
                    }else{
                        $newkey = [$key,$i];
                        $key = implode($delimiter, $newkey);
                        $array2 = [$key => $element];
                    }
                }
            }else{
                $array1 = [$key => $value];
            }
        }
        $array4 = array_merge($array1, $array2, $array3);
        print_r($array4);        
}

$dictionary = ['key'=>3, 'foo'=>['a'=>5,'bar'=> ['baz'=>8],]];
nester($dictionary);