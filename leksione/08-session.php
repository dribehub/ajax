<?php

// session_start():     starts session
// session_destroy():   ends session
// $_SESSION:           saves session content
$_SESSION['id'] = 2;
echo $_SESSION['id'];

/* Login example */

/* login.php */ 
    ?>
    <form action="checklogin.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username"/><br>
        <label for="password">Password:</label>
        <input type="password" id="password"/><br>
        <input type="submit" value="Check Login"/>
    </form>

    <?php
    if (isset($_GET['message'])) {
        if ($_GET['message'] === 1)
            echo 'Wrong credentials. Try again!';
        else
            echo 'Protected page (requires login)!';
    }

/* checklogin.php */
    session_start();
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username === 'admin' && md5($password) === md5('Admin123$')) {
            $_SESSION['username'] = $username;
            header('location: home:php');
        } else {
            header('location: login.php?message=1');
        }
    } else {
        header('location: login.php?message=2');
    }
    
/* home.php */
    session_start();
    if (isset($_SESSION['username']))
        echo "Welcome {$_SESSION['username']}!";
    else
        header('location: login.php?message=2');