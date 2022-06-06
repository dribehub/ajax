<?php

/* Status codes
    1xx – Informative
    2xx – Success
    3xx – Redirected
    4xx – Client Error
    5xx – Server Error
*/

/* Request functions
    $_GET
    $_POST
    $_REQUEST
*/

echo "Welcome {$_GET['name']} {$_GET['surname']}!";

/* Login example */

    ?><!-- login.html -->
    <form action="checklogin.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username"/><br>
        <label for="password">Password:</label>
        <input type="password" id="password"/><br>
        <input type="submit" value="Check Login"/>
    </form>

    <?php // checklogin.php
    if ($_POST['username'] == "admin" && $_POST['password'] == "Admin123$")
        echo "Loguar me sukses!";
    else
        header("location: login.html");