<table border="1px">
    <?php 
        for ($i = 1; $i <= 8; $i++) {
            echo '<tr>'; /* ?><tr><?php */
                for ($j = 1; $j <= 8; $j++) {
                    if (($i + $j) % 2 == 0) { 
                        echo '<td bgcolor=“#FFFFFF”></td>'; /* ?><td bgcolor=“#FFFFFF”></td><?php  */
                    } else {
                        echo '<td bgcolor=“#000000”></td>'; /* ?><td bgcolor=“#000000”></td><?php  */
                    }
                }
            echo '</tr>'; /* ?></tr><?php  */
        }
    ?>
</table>

<!-- notes --><?php

// data types
    // integer, double, boolean, NULL, string, array, object

// variable scope
    $x = "test"; // global $x
    function afisho() 
    {
        global $x; // extends the scope of $x from local to global
        echo $x; // echoes the global $x
    }

// constant variables
    define("PI", 3.14);
    $area = PI * 3 * 3;

// operators
    // arithmetic (+ - * / % .)
    // assignation (= += -= /= *= %= .= ++ --)
    // comparative (== != < > <= >= === !==)
    // logical (&& || ! and or xor)