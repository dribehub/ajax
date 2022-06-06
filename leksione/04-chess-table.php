<table border="1px">
    <?php 
        for ($i = 1; $i <= 8; $i++) {
            ?><tr><?php
                for ($j = 1; $j <= 8; $j++) {
                    if (($i + $j) % 2 == 0) { 
                        ?><td bgcolor=“#FFFFFF”></td><?php 
                    } else {
                        ?><td bgcolor=“#000000”></td><?php 
                    } // if
                } // for j
            ?></tr><?php 
        } // for i 
    ?>
</table>