<?php

$name = "preference";
$value = $_POST[$name];
$expires_at = time() + 60;
setcookie($name, $value, $expires_at);
echo $_COOKIE[$name];

/* Cookie example */

    /* preference.php */
        ?>
        <html>
        <head><title>Preference</title></head>
        <body>
            <?php
                if (isset($_COOKIE['preference'])) {
                    echo "Preferenca juaj eshte {$_COOKIE['preference']}";
                } else {
                    ?>
                    <form action="savepreference.php" method="POST" name="frm">
                        <input type="text" name="preference", id="preference"/><br>
                        <input type="submit" value="ruaj"/>
                    </form>
                    <?php
                }
            ?>
        </body>
        </html>
        <?php

    /* savepreference.php */
        if (isset($_POST['preference'])) {
            $name = "preference";
            $value = $_POST[$name];
            $expires_at = time() + 60;
            setcookie($name, $value, $expires_at);
        }
        header('Location: preference.php');
        exit();