<?php

/* mutual functions */
    // count(array):                    counts the number of elements in array
    // sizeof(array):                   counts the number of elements in array
    // array_sum(array):                calculates the sum of array elements
    // in_array(val, array):            searches value in array
    // array_search(val, array):        searches value in array
    // array_push(array, ...args):      adds elements to the end of array
    // array_fill(i, count, val):       fills array with values starting from $i index
    // array_pad(array, len, val):      expands array to length and fills added values with $val
    // array_pop(array):                removes last element from array
    // array_shift(array):              removes first element from array
    // unset(array, el):                removes an element from array
    // array_merge(...arrays):          merges arrays
    // array_slice(array, i, len):      finds subarray starting from $i index
    // array_splice(a1, i, len, a2):    replaces elements of array_slice($a1, $i, $len) with $a2 values 

/* indexed arrays */
    //declaration
        $arr = ['one', 'two', 'three'];
        $arr = array('one', 'two', 'three');
    // iteration
        for ($i = 0; $i < count($arr); $i++)
            echo $arr[$i];
    // sort(array)
        // sorts array in ascending order
    // rsort(array)
        // sorts array in descending order

/* associative arrays */
    //declaration
        $arr = array(1 => 'one', 2 => 'two', 3 => 'three');
    // iteration
        foreach($array as $key => $value)
            echo "$key: $value";
    // asort(array)
        // sorts array in ascending order by values
    // ksort(array)
        // sorts array in ascending order by keys
    // arsort(array)
        // sorts array in descending order by values
    // krsort(array)
        // sorts array in descending order by keys